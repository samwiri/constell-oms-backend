<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCargoDeclationRequest;
use App\Http\Requests\UpdateCargoDeclationRequest;
use App\Mail\CargoDeclerationEmail;
use App\Models\CargoDeclation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class CargoDeclationController extends Controller
{
    /** 
     * Cargo decleration
     * 
     * @group cargo Decleration
     * @header Bearer Token    
     * 
     * @authenticated
     * @response  {
     *   "message": "Cargo declarations",
     *   "data": [
     *       {
     *           "id": 1,
     *           "created_at": "2025-12-30T08:08:52.000000Z",
     *           "updated_at": "2025-12-30T08:29:31.000000Z",
     *           "deleted_at": null,
     *           "warehouse_location_id": 1,
     *           "internal_curier": "DHL",
     *           "tracking_number": "DHL-009874",
     *           "cargo_details": "Laptops",
     *           "value": "34000",
     *           "weight": "50",
     *           "status": "pending",
     *           "files": [
     *               "package_photos/mCJHMcA4IyQl1Ws54K3OllAgVNWm1pYB3gNCKrY0.pdf",
     *               "package_photos/p9FvfMIqBxNwePlG4RsR2DN6IoBZOaUGOtv29cAJ.pdf"
     *           ],
     *           "user_id": 1,
     *           "user": {
     *               "id": 1,
     *               "full_name": "Samson Tusiime",
     *               "email": "tusiimesam@gmail.com",
     *               "phone": "+256775926572",
     *               "tin": null,
     *               "passport": null,
     *               "address": "Kampala",
     *               "status": "active",
     *               "user_type": "super_user",
     *               "created_at": "2025-12-22T07:51:55.000000Z",
     *               "updated_at": "2025-12-22T07:51:55.000000Z",
     *               "deleted_at": null,
     *               "delivery_address": null
     *           },
     *           "location": {
     *               "id": 1,
     *               "created_at": "2025-12-22T13:00:03.000000Z",
     *               "updated_at": "2025-12-22T13:03:02.000000Z",
     *               "deleted_at": null,
     *               "code": "ZM",
     *               "name": "Zamaleto",
     *               "address": "Kampala",
     *               "manager": "Charles",
     *               "active": 1,
     *               "rack_count": "4",
     *               "country": "Uganda"
     *           }
     *       }
     *   ]
     * }
     * 
    **/
    public function index()
    {

        $user = Auth::user(); 

        if($user->user_type=="super_user" || $user->user_type=="staff")

            $cargoDecleration = CargoDeclation::with('user','location')->get();

        else {

            $cargoDecleration = CargoDeclation::with('user','location')->where('user_id',$user->id)->get();

        }
        
        return response()->json([
            'message' => 'Cargo declarations',
            'data'    => $cargoDecleration
        ], 201);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /** 
     * Store Cargo decleration
     * 
     * @group cargo Decleration
     * @header Bearer Token    
     * 
     * @bodyParam warehouse_location_id integer required
     * @bodyParam internal_curier string optional
     * @bodyParam tracking_number string optional
     * @bodyParam cargo_details string required
     * @bodyParam value string required
     * @bodyParam weight string
     * 
     * @authenticated
     * 
    * */

    public function store(StoreCargoDeclationRequest $request)
    {

        $data = $request->validated();

        $data['user_id']=Auth::id();

        $cargoDeclation = CargoDeclation::create($data);

        try {
           Mail::to(env('MAIL_USERNAME'))->send(new CargoDeclerationEmail($cargoDeclation));
        } catch (\Exception $th) {}      

        return response()->json([
            'message' => 'Cargo declaration created successfully',
            'data'    => $cargoDeclation->load('user','location')
        ], 201);

    }


        
    /** 
     * Cargo decleration
     * 
     * @group cargo Decleration
     * @header Bearer Token    
     * 
     * @urlParam cargoDeclation_id integer required
     *  
     * 
     * @authenticated
     * 
    * */
    
    public function show($cargoDeclation_id)
    {
        $cargoDecleration = CargoDeclation::with('user','location')->findOrFail($cargoDeclation_id);

          return response()->json([
            'message' => 'Cargo declaration',
            'data'    => $cargoDecleration
        ], 201);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CargoDeclation $cargoDeclation)
    {
        //
    }

    /** 
     * Update Cargo decleration
     * 
     * @group cargo Decleration
     * @header Bearer Token    
     * 
     * @urlParam cargoDeclation_id integer required
     * @bodyParam internal_curier string optional
     * @bodyParam tracking_number string optional
     * @bodyParam cargo_details string required
     * @bodyParam value string required
     * @bodyParam weight string
     * @bodyParam status string Example: pending,received,declined
     * 
     * @authenticated
     * 
    * */
    public function update(UpdateCargoDeclationRequest $request, $cargoDeclation_id)
    {
        $decleration = CargoDeclation::findOrFail($cargoDeclation_id);

        $decleration->update($request->validated());

        return response()->json([
            'message' => 'Cargo decleration updated successfully',
            'data'    => $decleration->load('user','location')
        ]);
    }

    /** 
     * Delete Cargo decleration
     * 
     * @group cargo Decleration
     * @header Bearer Token    
     * 
     * @urlParam cargoDeclation_id integer required
     *  
     * 
     * @authenticated
     * 
    * */

    public function destroy($cargoDeclation_id)
    {
        CargoDeclation::destroy($cargoDeclation_id);

        return response()->json([
            'message' => 'Cargo decleration deleted',       
        ]);
    }


    /** 
     * Uplaod Cargo decleration files
     * 
     * @group cargo Decleration
     * @header Bearer Token    
     * 
     * @urlParam cargoDeclation_id integer required
     * @bodyParam files array
     * 
     * @authenticated
     * 
    * */
    public function storePackagePhotos(Request $request, $cargodelceration_id)
    {
        $cargo_files = CargoDeclation::findOrFail($cargodelceration_id);

        $request->validate([
            'files'   => 'required|array',
            'files.*' => 'required|mimes:jpg,jpeg,png,webp,pdf',
        ]);

        $storedFiles = [];

        foreach ($request->file('files') as $photo) {
            $path = $photo->store('package_photos', 'public');
            $storedFiles[] = $path;
        }
    
        $existing = $package->files ?? [];
        $cargo_files->files = array_merge($existing, $storedFiles);
        $cargo_files->save();

        return response()->json([
            'message' => 'Package files uploaded successfully',
            'data'    => $cargo_files
        ]);
    }


    
    /** 
     * Delete Cargo decleration file
     * 
     * @group cargo Decleration
     * @header Bearer Token    
     * 
     * @urlParam cargodelceration_id integer required
     * @bodyParam file_name string required
     * 
     * @authenticated
     * 
    * */

    public function deletePackagePhotos(Request $request, $cargodelceration_id)
    {  

        $package = CargoDeclation::findOrFail($cargodelceration_id);

        $request->validate([
            'file_name' => 'required|string'
        ]);

        $file = $request->file_name; //e.g package_photos/cargo_document.jpg

        $existingFiles = $package->files ?? [];
           
        if (!in_array($file, $existingFiles)) {

            return response()->json([

                'message' => 'Photo not found in this package'

            ], 404);

        }
    
        if (Storage::disk('public')->exists($file)) {

            Storage::disk('public')->delete($file);

        }
       
        $updatedFiles = array_filter($existingFiles, fn ($p) => $p !== $file);

        $package->files = array_values($updatedFiles);

        $package->save();

        return response()->json([
            'message' => 'Package File deleted successfully',
            'data'    => $package
        ]);

    }
}
