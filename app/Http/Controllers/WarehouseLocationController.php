<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreWarehouseLocationRequest;
use App\Http\Requests\UpdateWarehouseLocationRequest;
use App\Models\User;
use App\Models\WarehouseLocation;
use Illuminate\Http\Request;

class WarehouseLocationController extends Controller
{

    /** 
     * Warehouse Locations
     * 
     * @group Warehouse Location
     * @authenticated 
     * 
     * @response  {
     *       "status": "success",
     *       "message": "Warehouse Locations",
     *       "data": [
     *           {
     *               "id": 1,
     *               "created_at": "2025-12-05T09:12:00.000000Z",
     *               "updated_at": "2025-12-05T09:12:00.000000Z",
     *               "deleted_at": null,
     *               "code": "A-01-B-03",
     *               "zone": "A",
     *               "rack": "01",
     *               "bay": "B",
     *               "shelf": "03",
     *               "is_occupied": 0
     *           }
     *       ]
     *   }
     * 
    **/

    public function index()
    {
        $warehouses = WarehouseLocation::get();

        $data = [
            'status' => 'success', 
            'message'=>'Warehouse Locations',           
            'data'=>$warehouses,              
        ];

        return response()->json(($data),200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /** 
     * Create Warehouse Location
     * 
     * @group Warehouse Location
     * @authenticated
     * @bodyParam code string required
     * @bodyParam zone string required   
     * @bodyParam rack string required
     * @bodyParam bay string
     * @bodyParam shelf string
     * 
     * @response  {
     *       "status": "success",
     *       "message": "Account created successfully",
     *       "data": {
     *           "full_name": "Thembo Charles",
     *           "email": "ashley7520charles@gmail.com",
     *           "phone": "0787444081",
     *           "tin": "110023452",
     *           "passport": "65748",
     *           "address": "Kampala",
     *           "updated_at": "2025-12-05T06:42:09.000000Z",
     *           "created_at": "2025-12-05T06:42:09.000000Z",
     *           "id": 1
     *       }
     *   }
     * 
    **/

    public function store(StoreWarehouseLocationRequest $request)
    {

       $saveWarehouseLocation = WarehouseLocation::create($request->validated()); 

        $data = [
            'status' => 'success',
            'message' => 'Warehouse Location created successfully',
            'data'=>$saveWarehouseLocation,
        ];

        return response()->json(($data),200);

    }

    /**
     * Display the specified resource.
     */
    public function show(WarehouseLocation $warehouseLocation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(WarehouseLocation $warehouseLocation)
    {
        //
    }

    /** 
     * Update Warehouse Location
     * 
     * @group Warehouse Location
     * @authenticated
     * @bodyParam code string required
     * @bodyParam zone string required   
     * @bodyParam rack string required
     * @bodyParam bay string
     * @bodyParam shelf string
     * 
     * @response  {
     *       "status": "success",
     *       "message": "Account created successfully",
     *       "data": {
     *           "full_name": "Thembo Charles",
     *           "email": "ashley7520charles@gmail.com",
     *           "phone": "0787444081",
     *           "tin": "110023452",
     *           "passport": "65748",
     *           "address": "Kampala",
     *           "updated_at": "2025-12-05T06:42:09.000000Z",
     *           "created_at": "2025-12-05T06:42:09.000000Z",
     *           "id": 1
     *       }
     *   }
     * 
    **/

    public function update(UpdateWarehouseLocationRequest $request, $warehouseLocation_id)
    {

        $updateWarehouseLocation = WarehouseLocation::find($warehouseLocation_id);

        $updateWarehouseLocation->update($request->validated()); 

        $data = [
            'status' => 'success',
            'message' => 'Warehouse Location created successfully',
            'data'=>$updateWarehouseLocation,
        ];

        return response()->json(($data),200);
    }

    /** 
     * Delete Warehouse Location
     * 
     * @group Warehouse Location
     * @authenticated
     * @urlParam warehouseLocation_id integer required
     * @response  {
     *       "status": "success",
     *       "message": "Warehouse Location deleted successfully"
     *   }
     * 
    **/
    public function destroy($warehouseLocation_id)
    {
        WarehouseLocation::destroy($warehouseLocation_id);

        $data = [
            'status' => 'success',
            'message' => 'Warehouse Location deleted successfully',       
        ];

        return response()->json(($data),200);
    }
}
