<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAssistedShoppingRequest;
use App\Http\Requests\UpdateAssistedShoppingRequest;
use App\Mail\AssistedShoppingMail;
use App\Models\AssistedShopping;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class AssistedShoppingController extends Controller
{

    /** 
     * Assisted shopping lists
     * 
     * @group AssistedShopping
     * @header Bearer Token    
     * 
     *  
     * 
     * @authenticated
     * 
     * @response   {
     *   "message": "Assisted Shoppings",
     *   "data": {
     *       "current_page": 1,
     *       "data": [             
     *           {
     *               "id": 3,
     *               "created_at": "2025-12-19T14:05:32.000000Z",
     *               "updated_at": "2025-12-19T14:05:32.000000Z",
     *               "deleted_at": null,
     *               "name": "iPhones 16",
     *               "url": "https://www.jumia.ug/mlp-oraimo-store/",
     *               "quantity": 1,
     *               "status": "requested",
     *               "notes": "All packages are in good condition",
     *               "user_id": 1,
     *               "user": {
     *                   "id": 1,
     *                   "full_name": "Samson Tusiime",
     *                   "email": "tusiimesam@gmail.com",
     *                   "phone": "+256775926572",
     *                   "tin": null,
     *                   "passport": null,
     *                   "address": "Kampala",
     *                   "status": "active",
     *                   "user_type": "super_user",
     *                   "created_at": "2025-12-10T08:58:27.000000Z",
     *                   "updated_at": "2025-12-10T08:58:27.000000Z",
     *                   "deleted_at": null
     *               }
     *           },
     *      
     *       ],
     *       "first_page_url": "http://127.0.0.1:8000/api/assisted_shopping?page=1",
     *       "from": 1,
     *       "last_page": 1,
     *       "last_page_url": "http://127.0.0.1:8000/api/assisted_shopping?page=1",
     *       "links": [
     *           {
     *               "url": null,
     *               "label": "&laquo; Previous",
     *               "active": false
     *           },
     *           {
     *               "url": "http://127.0.0.1:8000/api/assisted_shopping?page=1",
     *               "label": "1",
     *               "active": true
     *           },
     *           {
     *               "url": null,
     *               "label": "Next &raquo;",
     *               "active": false
     *           }
     *       ],
     *       "next_page_url": null,
     *       "path": "http://127.0.0.1:8000/api/assisted_shopping",
     *       "per_page": 20,
     *       "prev_page_url": null,
     *       "to": 4,
     *       "total": 4
     *   }
     * }
     * 
    **/
    
    public function index()
    {

        $user = Auth::user();

        if($user->user_type=="super_user" || $user->user_type=="staff"){

            $assisted_shoppings = AssistedShopping::with('user','quoteItems','payments')->latest()->paginate(20);

        }else{
            $assisted_shoppings = AssistedShopping::with('user','quoteItems','payments')->where('user_id',$user->id)->latest()->paginate(20);
        }

        

        return response()->json([
            'message' => 'Assisted Shoppings',
            'data'    => $assisted_shoppings
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
     * Add Assisted shopping
     * 
     * @group AssistedShopping
     * @header Bearer Token    
     * 
     * @bodyParam name string required
     * @bodyParam url string required
     * @bodyParam quantity integer
     * @bodyParam notes string
     * 
     * @authenticated
     * 
     * @response  {
     *       "message": "Assisted Shopping item added to successfully",
     *       "data": {
     *           "name": "Phones",
     *           "url": "https://www.jumia.ug/mlp-oraimo-store/",
     *           "notes": "All packages are in good condition",
     *           "user_id": 1,
     *           "updated_at": "2025-12-19T13:58:47.000000Z",
     *           "created_at": "2025-12-19T13:58:47.000000Z",
     *           "id": 1
     *       }
     *   }
     * 
    **/
   
    public function store(StoreAssistedShoppingRequest $request)
    {

        $data = $request->validated();

        $data['user_id'] = Auth::id();

        $assisted_shopping = AssistedShopping::create($data);

        Mail::to(env("MAIL_FROM_ADDRESS"))->send(new AssistedShoppingMail($assisted_shopping));
      
        return response()->json([
            'message' => 'Assisted Shopping item added to successfully',
            'data'    => $assisted_shopping->load('user')
        ], 201);
        
    }

    /** 
     * Assisted shopping
     * 
     * @group AssistedShopping
     * @header Bearer Token    
     * 
     * @urlParam assistedShopping_id integer required
     * 
     * @authenticated
     * 
    **/
    public function show(AssistedShopping $assistedShopping)
    {
        return response()->json([
            'message' => 'Assisted Shopping',
            'data'    => $assistedShopping->load('user','quoteItems','payments')
        ], 201);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AssistedShopping $assistedShopping)
    {
        //
    }

    /** 
     * Updated Assisted shopping
     * 
     * @group AssistedShopping
     * @header Bearer Token    
     * 
     * @bodyParam name string 
     * @bodyParam url string 
     * @bodyParam quantity integer
     * @bodyParam notes string
     * @bodyParam status string Example: ['requested','quoted','paid','declined']
     * @urlParam assistedShopping_id integer required
     * 
     * @authenticated
     * 
     * @response  {
     *       "message": "Assisted Shopping item added to successfully",
     *       "data": {
     *           "name": "Phones",
     *           "url": "https://www.jumia.ug/mlp-oraimo-store/",
     *           "notes": "All packages are in good condition",
     *           "user_id": 1,
     *           "updated_at": "2025-12-19T13:58:47.000000Z",
     *           "created_at": "2025-12-19T13:58:47.000000Z",
     *           "id": 1
     *       }
     *   }
     * 
    **/
    public function update(UpdateAssistedShoppingRequest $request, AssistedShopping $assistedShopping)
    {    
 
        $data =  $assistedShopping->update($request->validated());
      
        return response()->json([
            'message' => 'Assisted Shopping item updated to successfully',
            'data'    => $data
        ], 201);
    }

    /** 
     * Updated Assisted shopping
     * 
     * @group AssistedShopping
     * @header Bearer Token    
     * @urlParam assistedShopping_id integer required
     * 
     * @authenticated
     * 
     * @response  {
     *       "message": "Assisted Shopping item deleted to successfully",
     *   
     *   }
     * 
    **/
    public function destroy(AssistedShopping $assistedShopping)
    {

        $assistedShopping->delete();

        return response()->json([
            'message' => 'Assisted Shopping item deleted to successfully',
         ], 201);
    }

    
}
