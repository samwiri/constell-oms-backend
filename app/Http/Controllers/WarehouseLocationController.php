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
     *               "country": "Uganda",
     *               "address": "A",
     *               "rack_count": "01",
     *               "is_occupied": 0
     *           }
     *       ]
     *   }
     * 
    **/

    public function index()
    {
        $warehouses = WarehouseLocation::with('racks')->get();

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
     * @bodyParam address string required   
     * @bodyParam rack_count string required
     * @bodyParam manager string
     * @bodyParam name string
     * @bodyParam country string
     * 
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
    public function show($warehouseLocation_id)
    {
        $warehouses = WarehouseLocation::with('racks')->find($warehouseLocation_id);

        $data = [
            'status' => 'success', 
            'message'=>'Warehouse Locations',           
            'data'=>$warehouses,              
        ];

        return response()->json(($data),200);
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
     * @bodyParam address string required   
     * @bodyParam rack_count string required
     * @bodyParam manager string
     * @bodyParam name string
     * @bodyParam country string
     * @urlParam warehouseLocation_id integer required
     *    
    **/

    public function update(UpdateWarehouseLocationRequest $request, $warehouseLocation_id)
    {     

        $updateWarehouseLocation = WarehouseLocation::find($warehouseLocation_id);

        $updateWarehouseLocation->update($request->validated()); 

        $data = [
            'status' => 'success',
            'message' => 'Warehouse Location updated successfully',
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
