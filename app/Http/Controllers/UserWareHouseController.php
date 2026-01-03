<?php

namespace App\Http\Controllers;

use App\Models\UserWareHouse;
use Illuminate\Http\Request;

class UserWareHouseController extends Controller
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
     * Allocate an Account a WareHouse
     * 
     * @group User profile  
     * @header Bearer Token 
     * @bodyParam user_id integer required
     * @bodyParam warehouse_location_id integer required     
    * 
    * @authenticated
    
    * 
    **/ 
    public function store(Request $request)
    {
        
        $saveUserLocation = UserWareHouse::firstOrCreate(
            [
                'user_id' => $request->user_id,
                'warehouse_location_id' => $request->warehouse_location_id,
            ]
        );       

        if (! $saveUserLocation->wasRecentlyCreated) {
            return response()->json([
                'message' => 'This user is already allocated to this warehouse.',
            ], 409);
        }

        $saveUserLocation->load('warehouse', 'user');

        return response()->json([
            'message' => 'Staff allocated to Warehouse',
            'data'    => $saveUserLocation,
        ], 201);

    }

    /**
     * Display the specified resource.
     */
    public function show(UserWareHouse $userWareHouse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UserWareHouse $userWareHouse)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, UserWareHouse $userWareHouse)
    {
        //
    }

    /** 
     * Remove an Account from WareHouse
     * 
     * @group User profile  
     * @header Bearer Token 
     * @urlParam userWareHouse_id integer required 
     * @authenticated    
     * 
    **/ 
    public function destroy($userWareHouse_id)
    {

        UserWareHouse::destroy($userWareHouse_id);

        return response()->json([
            'message' => 'Staff removed from Warehouse', 
        ], 201);

    }
}
