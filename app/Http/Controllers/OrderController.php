<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /** 
     * Orders
     * 
     * @group Orders  
     * @header Bearer Token    
   
     * @authenticated
     * @responseFile 200 api/orders.json 
     * 
    **/
    public function index()
    {

        $orders =  Order::with('statusHistory','statusHistory.user','user')->latest()->paginate(20);

        return response()->json([
            'status' => 'success',
            'data'   =>$orders,
        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /** 
     * Place Order
     * 
     * @group Orders  
     * @header Bearer Token    
     * @bodyParam origin_country string required
     * @bodyParam receiver_name string required
     * @bodyParam receiver_phone string required
     * @bodyParam receiver_email string
     * @bodyParam receiver_address string
     * @authenticated
     * @response  {
     *       "status": "success",
     *       "message": "Order created successfully.",
     *       "data": {
     *           "origin_country": "ITALY",
     *           "receiver_name": "Tom Mboya",
     *           "receiver_phone": "0789887766",
     *           "receiver_email": "tom.mboya@gmail.com",
     *           "receiver_address": "Uganda - Kampala",
     *           "tracking_number": "ORD-20251205-00002",
     *           "user_id": 1,
     *           "updated_at": "2025-12-05T12:20:11.000000Z",
     *           "created_at": "2025-12-05T12:20:11.000000Z",
     *           "id": 5,
     *           "status_history": [],
     *           "user": {
     *               "id": 1,
     *               "full_name": "Thembo Charles",
     *               "email": "ashley7520charles@gmail.com",
     *               "phone": "0787444081",
     *               "email_verified_at": null,
     *               "tin": "110023452",
     *               "passport": "65748",
     *               "address": "Kampala",
     *               "otp": "4782",
     *               "status": "active",
     *               "user_type": "user",
     *               "created_at": "2025-12-05T06:42:09.000000Z",
     *               "updated_at": "2025-12-05T07:58:28.000000Z",
     *               "deleted_at": null
     *           }
     *       }
     *   }
     * 
    **/

    public function store(StoreOrderRequest $request)
    {       

       $data = $request->validated();

       $data['tracking_number'] = Order::generateOrderNumber();

       $data['user_id'] = Auth::id();

       $order = Order::create($data);

       return response()->json([
            'status'  => 'success',
            'message' => 'Order created successfully.',
            'data'    => $order->load('statusHistory','statusHistory.user','user'),
        ], 201);

    }

    /** 
     * Show Order
     * 
     * @group Orders  
     * @header Bearer Token    
     * @urlParam order_id integer required
     * @authenticated
     * @responseFile 200 api/order.json
     * 
     * 
    **/
    public function show(Order $order)
    {
       
        return response()->json([
            'status' => 'success',
            'data'   => $order->load('statusHistory','statusHistory.user','user'),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /** 
     * Update Order
     * 
     * @group Orders  
     * @header Bearer Token    
     * @bodyParam origin_country string required
     * @bodyParam receiver_name string required
     * @bodyParam receiver_phone string required
     * @bodyParam receiver_email string
     * @bodyParam receiver_address string
     * @urlParam order_id integer required
     * @authenticated
     * @response  {
     *          "status": "success", 
     *           "message": "Order updated successfully.",            
     *       }
     *   } 
     * 
    **/
    public function update(UpdateOrderRequest $request, Order $order)
    {
        $order->update($request->validated());

        return response()->json([
            'status'  => 'success',
            'message' => 'Order updated successfully.',
            'data'    => $order->load('statusHistory','statusHistory.user','user'),
        ]);
    }

    /** 
     * Delete Order
     * 
     * @group Orders  
     * @header Bearer Token    
     * @urlParam order_id integer required 
     * @authenticated
     * @response  {
     *          "status": "success", 
     *           "message": "Order deleted successfully.",            
     *       }
     *   } 
     * 
    **/
    public function destroy(Order $order)
    {
       $order->delete();

        return response()->json([
            'status'  => 'success',
            'message' => 'Order deleted successfully.',
        ]);
    }
}
