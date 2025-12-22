<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreWarehouseRackRequest;
use App\Http\Requests\UpdateWareHouseRackRequest;
use App\Models\WarehouseRack;
use Illuminate\Http\Request;

class WarehouseRackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $racks = WarehouseRack::with('warehouse')->get();

         $data = [
            'status' => 'success',
            'message' => 'Warehouse rack',
            'data'=>$racks,
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
     * Create Warehouse Rack
     * 
     * @group Warehouse Location
     * @authenticated
     * @bodyParam zone_name string required
     * @bodyParam bin_start string required   
     * @bodyParam bin_end string required
     * @bodyParam capacity string
     * @bodyParam type string Example SHELF,PALLET,COLD,FRAGILE
     * @bodyParam warehouse_location_id integer required
     * 
    **/
    public function store(StoreWarehouseRackRequest $request)
    {
        $saveWarehouseRack = WarehouseRack::create($request->validated()); 

        $data = [
            'status' => 'success',
            'message' => 'Warehouse rack created successfully',
            'data'=>$saveWarehouseRack,
        ];

        return response()->json(($data),200);
    }

    /**
     * Display the specified resource.
     */
    public function show(WarehouseRack $warehouseRack)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(WarehouseRack $warehouseRack)
    {
        //
    }

   /** 
     * Update Warehouse Rack
     * 
     * @group Warehouse Location
     * @authenticated
     * @bodyParam zone_name string sometimes
     * @bodyParam bin_start string sometimes   
     * @bodyParam bin_end string sometimes
     * @bodyParam capacity string sometimes
     * @bodyParam type string sometimes Example SHELF,PALLET,COLD,FRAGILE
     * @bodyParam warehouseRack_id integer required
     * 
    **/
    public function update(UpdateWareHouseRackRequest $request, WarehouseRack $warehouseRack)
    {
        
        $saveWarehouseRack =  $warehouseRack->updated($request->validated()); 

        $data = [
            'status' => 'success',
            'message' => 'Warehouse rack updated successfully',
            'data'=>$saveWarehouseRack,
        ];

        return response()->json(($data),200);
    }

    /** 
     * Delete Warehouse Rack
     * 
     * @group Warehouse Location
     * @authenticated
   
     * @bodyParam warehouseRack_id integer required
     * 
    **/
    public function destroy(WarehouseRack $warehouseRack)
    {

        $warehouseRack->delete();

        $data = [
            'status' => 'success',
            'message' => 'Warehouse rack deleted successfully',
        ];

        return response()->json(($data),200);
    }
}
