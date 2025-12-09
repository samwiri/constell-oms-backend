<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOrderStatusHistoryRequest;
use App\Mail\NotifyCustomer;
use App\Models\Order;
use App\Models\OrderStatusHistory;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class OrderStatusHistoryController extends Controller
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
     * Update Order status
     * 
     * @group Orders  
     * @header Bearer Token    
     * @bodyParam order_id integer required
     * @bodyParam status string required e.g PENDING,RECEIVED,CONSOLIDATED,DISPATCHED,IN_TRANSIT,ARRIVED,READY_FOR_RELEASE,RELEASED,DELIVERED
     * @bodyParam notes string required
     * @bodyParam location string
     * @authenticated
     * @response  {
     *          "status": "success", 
     *           "message": "Order history created successfully.",            
     *       }   
     * 
    **/

    public function store(StoreOrderStatusHistoryRequest $request)
    {
        $data = $request->validated();

        $data['user_id'] = Auth::id();

        $data['order_id'] = $request->order_id;

        $order_history = OrderStatusHistory::create($data);

        // $order_history->status = $order_history->status;
        
        if($order_history->status == "RECEIVED"){
            $order_history->received_at = now();
        }

        if($order_history->status == "DISPATCHED"){
            $order_history->dispatched_at = now();
        }

        if($order_history->status == "ARRIVED"){
            $order_history->arrived_at = now();
        }

        if($order_history->status == "RELEASED"){
            $order_history->released_at = now();
        }

        if($order_history->status == "DELIVERED"){
            $order_history->delivered_at = now();
        }

        $order_history->save();      
        
        $order_history->sendNotification($order_history);

        return response()->json([
            'status'  => 'success',
            'message' => 'Order history updated successfully.',
            'data'    => $order_history,
        ], 201);

    }

    /**
     * Display the specified resource.
     */
    public function show(OrderStatusHistory $orderStatusHistory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(OrderStatusHistory $orderStatusHistory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, OrderStatusHistory $orderStatusHistory)
    {
        //
    }

    /** 
     * Delete Order status history
     * 
     * @group Orders  
     * @header Bearer Token    
     * @urlParam orderStatusHistory_id integer required 
     * @authenticated
     * @response  {
     *          "status": "success", 
     *           "message": "Order status history deleted.",            
     *       }
     *   } 
     * 
    **/
    public function destroy(OrderStatusHistory $orderStatusHistory)
    {
        $orderStatusHistory->delete();

        return response()->json([
            'status'  => 'success',
            'message' => 'Order status history deleted.',
        ]);
    }
}
