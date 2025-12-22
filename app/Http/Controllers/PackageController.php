<?php

namespace App\Http\Controllers;

use App\Http\Requests\PackageRequest;
use App\Http\Requests\UpdatePackageRequest;
use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /** 
     * Add Package to order
     * 
     * @group Package  
     * @header Bearer Token    
     * @bodyParam order_id integer required
     * @bodyParam contents string required
     * @bodyParam declared_value double
     * @bodyParam weight double required
     * @bodyParam length double required
     * @bodyParam width double required
     * @bodyParam height double required
     * @bodyParam is_fragile boolean
     * @bodyParam is_hazardous boolean
     * @bodyParam is_damaged boolean
     * @bodyParam warehouse_rack_id required
     * @bodyParam received_at required
     * @authenticated
     * @response   {
     *   "status": "success",
     *   "message": "Package created successfully.",
     *   "data": {
     *       "order_id": "5",
     *       "hwb_number": "HWB-2025128-0021",
     *       "contents": "Computer - Desktop",
     *       "declared_value": "2500000",
     *       "weight": "5",
     *       "length": "4",
     *       "width": "6",
     *       "height": "2",
     *       "is_fragile": true,
     *       "is_hazardous": false,
     *       "is_damaged": false,
     *       "location_id": "1",
     *       "received_at": "2025-12-03T00:00:00.000000Z",
     *       "updated_at": "2025-12-08T07:32:17.000000Z",
     *       "created_at": "2025-12-08T07:32:17.000000Z",
     *       "id": 2
     *   }
     * }
     * 
    **/
    public function store(PackageRequest $request)
    {
        $data = $request->validated();

        $data['hwb_number'] = Package::generateNumber();       
      
        $package = Package::create($data);

        return response()->json([
            'status'  => 'success',
            'message' => 'Package created successfully.',
            'data'    => $package->load('rack','rack.wareHouse','order'),
        ], 201);

    }

    /**
     * Display the specified resource.
     */
    public function show(Package $package)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Package $package)
    {
        //
    }

    /** 
     * Update order Package
     * 
     * @group Package  
     * @header Bearer Token    
     * @urlParam package_id integer required
     * @bodyParam contents string required
     * @bodyParam declared_value double
     * @bodyParam weight double required
     * @bodyParam length double required
     * @bodyParam width double required
     * @bodyParam height double required
     * @bodyParam is_fragile boolean
     * @bodyParam is_hazardous boolean
     * @bodyParam is_damaged boolean
     * @bodyParam warehouse_rack_id
     * @bodyParam received_at required
     * @authenticated
     * @response   {
     *   "status": "success",
     *   "message": "Package updated successfully.",
     *   "data": {
     *       "order_id": "5",
     *       "hwb_number": "HWB-2025128-0021",
     *       "contents": "Computer - Desktop",
     *       "declared_value": "2500000",
     *       "weight": "5",
     *       "length": "4",
     *       "width": "6",
     *       "height": "2",
     *       "is_fragile": true,
     *       "is_hazardous": false,
     *       "is_damaged": false,
     *       "location_id": "1",
     *       "received_at": "2025-12-03T00:00:00.000000Z",
     *       "updated_at": "2025-12-08T07:32:17.000000Z",
     *       "created_at": "2025-12-08T07:32:17.000000Z",
     *       "id": 2
     *   }
     * }
     * 
    **/
    public function update(UpdatePackageRequest $request,$package_id)
    {

        $package = Package::findOrFail($package_id);

        $package->update($request->validated());

        return response()->json([
            'message' => 'Package updated successfully',
            'data'    => $package
        ]);
    }

    /** 
     * Delete Package
     * 
     * @group Package  
     * @header Bearer Token    
     * @urlParam package_id integer required 
     * @authenticated
     * @response  {
     *          "status": "success", 
     *           "message": "Package deleted successfully.",            
     *       }
     *   } 
     * 
    **/
    public function destroy($package_id)
    {
        $package = Package::findOrFail($package_id);

        $package->delete();

        return response()->json([
            'message' => 'Package deleted successfully'
        ]);
    }

    /** 
     * Add Package images
     * 
     * @group Package  
     * @header Bearer Token    
     * @urlParam packageId integer required
     * @bodyParam photos[] file required 
     * @authenticated
     * @response  {
     *       "message": "Package photos uploaded successfully",
     *       "data": {
     *           "id": 1,
     *           "created_at": "2025-12-08T07:19:43.000000Z",
     *           "updated_at": "2025-12-08T07:39:24.000000Z",
     *           "deleted_at": null,
     *           "order_id": 5,
     *           "hwb_number": "HWB-2025128-0002",
     *           "contents": "Computer - Desktop",
     *           "declared_value": "2500000.00",
     *           "weight": "5.00",
     *           "length": "4.00",
     *           "width": "6.00",
     *           "height": "2.00",
     *           "is_fragile": true,
     *           "is_hazardous": false,
     *           "is_damaged": false,
     *           "package_photos": [
     *               "package_photos/ngtZoTVR3mPb8G8otpFTeKnD78maftxCL7UXRcuD.jpg",
     *               "package_photos/LXHHmhE4YM0YoTn1Lva95FSyQi31i89dskkPv2il.jpg",
     *               "package_photos/thtdPXJtqtkpECHhbeyXIOAIMSGt564ZFIXBqdcp.jpg",
     *               "package_photos/Uc34hnpyAPsAT1QINJfca0msaFdudcYfaY2Qs21h.jpg"
     *           ],
     *           "location_id": 1,
     *           "received_at": "2025-12-03T00:00:00.000000Z"
     *       }
     *   }
     * 
    **/

   public function storePackagePhotos(Request $request, $packageId)
    {
        $package = Package::findOrFail($packageId);

        $request->validate([
            'photos'   => 'required|array',
            'photos.*' => 'image|mimes:jpg,jpeg,png,webp',
        ]);

        $storedPhotos = [];

        foreach ($request->file('photos') as $photo) {
            $path = $photo->store('package_photos', 'public');
            $storedPhotos[] = $path;
        }
    
        $existing = $package->package_photos ?? [];
        $package->package_photos = array_merge($existing, $storedPhotos);
        $package->save();

        return response()->json([
            'message' => 'Package photos uploaded successfully',
            'data'    => $package
        ]);
    }


    /** 
     * Delete a Package image
     * 
     * @group Package  
     * @header Bearer Token    
     * @urlParam packageId integer required
     * @bodyParam photo string required e.g package_photos/ngtZoTVR3mPb8G8otpFTeKnD78maftxCL7UXRcuD.jpg
     * @authenticated
     * @response  {
     *       "message": "Package photo deleted successfully",
     *       "data": {
     *           "id": 1,
     *           "created_at": "2025-12-08T07:19:43.000000Z",
     *           "updated_at": "2025-12-08T07:39:24.000000Z",
     *           "deleted_at": null,
     *           "order_id": 5,
     *           "hwb_number": "HWB-2025128-0002",
     *           "contents": "Computer - Desktop",
     *           "declared_value": "2500000.00",
     *           "weight": "5.00",
     *           "length": "4.00",
     *           "width": "6.00",
     *           "height": "2.00",
     *           "is_fragile": true,
     *           "is_hazardous": false,
     *           "is_damaged": false,
     *           "package_photos": [
     *               "package_photos/LXHHmhE4YM0YoTn1Lva95FSyQi31i89dskkPv2il.jpg",
     *               "package_photos/thtdPXJtqtkpECHhbeyXIOAIMSGt564ZFIXBqdcp.jpg",
     *               "package_photos/Uc34hnpyAPsAT1QINJfca0msaFdudcYfaY2Qs21h.jpg"
     *           ],
     *           "location_id": 1,
     *           "received_at": "2025-12-03T00:00:00.000000Z"
     *       }
     *   }
     * 
    **/

    public function deletePackagePhotos(Request $request, $packageId)
    {  

        $package = Package::findOrFail($packageId);

        $request->validate([
            'photo' => 'required|string'
        ]);

        $photo = $request->photo; //e.g package_photos/12345_image.jpg

        $existingPhotos = $package->package_photos ?? [];
           
        if (!in_array($photo, $existingPhotos)) {

            return response()->json([

                'message' => 'Photo not found in this package'

            ], 404);

        }
    
        if (Storage::disk('public')->exists($photo)) {

            Storage::disk('public')->delete($photo);

        }
       
        $updatedPhotos = array_filter($existingPhotos, fn ($p) => $p !== $photo);

        $package->package_photos = array_values($updatedPhotos);

        $package->save();

        return response()->json([
            'message' => 'Package photo deleted successfully',
            'data'    => $package
        ]);

    }


}
