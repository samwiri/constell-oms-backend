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
     * @response {
     *       "status": "success",
     *      "data": {
     *           "current_page": 1,
     *           "data": [
     *               {
     *                   "id": 5,
     *                   "created_at": "2025-12-05T12:20:11.000000Z",
     *                   "updated_at": "2025-12-05T12:20:11.000000Z",
     *                   "deleted_at": null,
     *                   "tracking_number": "ORD-20251205-00002",
     *                   "user_id": 1,
     *                   "origin_country": "ITALY",
     *                   "receiver_name": "Tom Mboya",
     *                   "receiver_phone": "0789887766",
     *                   "receiver_email": "tom.mboya@gmail.com",
     *                   "receiver_address": "Uganda - Kampala",
     *                   "status": "PENDING",
     *                   "received_at": null,
     *                   "dispatched_at": null,
     *                   "arrived_at": null,
     *                   "released_at": null,
     *                   "delivered_at": null,
     *                   "status_history": [
     *                       {
     *                           "id": 4,
     *                           "created_at": "2025-12-05T12:27:49.000000Z",
     *                           "updated_at": "2025-12-05T12:27:49.000000Z",
     *                           "deleted_at": null,
     *                           "order_id": 5,
     *                           "status": "CONSOLIDATED",
     *                           "notes": "Well received",
     *                           "location": "USA",
     *                           "user_id": 1,
     *                           "user": {
     *                               "id": 1,
     *                               "full_name": "Thembo Charles",
     *                               "email": "ashley7520charles@gmail.com",
     *                               "phone": "0787444081",
     *                               "email_verified_at": null,
     *                               "tin": "110023452",
     *                               "passport": "65748",
     *                               "address": "Kampala",
     *                               "otp": "4782",
     *                               "status": "active",
     *                               "user_type": "user",
     *                               "created_at": "2025-12-05T06:42:09.000000Z",
     *                               "updated_at": "2025-12-05T07:58:28.000000Z",
     *                               "deleted_at": null
     *                           }
     *                       }
     *                   ],
     *                   "user": {
     *                       "id": 1,
     *                       "full_name": "Thembo Charles",
     *                       "email": "ashley7520charles@gmail.com",
     *                       "phone": "0787444081",
     *                       "email_verified_at": null,
     *                       "tin": "110023452",
     *                       "passport": "65748",
     *                       "address": "Kampala",
     *                       "otp": "4782",
     *                       "status": "active",
     *                       "user_type": "user",
     *                       "created_at": "2025-12-05T06:42:09.000000Z",
     *                       "updated_at": "2025-12-05T07:58:28.000000Z",
     *                       "deleted_at": null
     *                   }
     *               },
     *               {
     *                   "id": 2,
     *                   "created_at": "2025-12-05T11:29:08.000000Z",
     *                   "updated_at": "2025-12-05T11:29:08.000000Z",
     *                   "deleted_at": null,
     *                   "tracking_number": "ORD-20251205-00001",
     *                   "user_id": 1,
     *                   "origin_country": "USA",
     *                   "receiver_name": "Tom Mboya",
     *                   "receiver_phone": "0789887766",
     *                   "receiver_email": "tom.mboya@gmail.com",
     *                   "receiver_address": "Uganda - Kampala",
     *                   "status": "PENDING",
     *                   "received_at": null,
     *                   "dispatched_at": null,
     *                   "arrived_at": null,
     *                   "released_at": null,
     *                   "delivered_at": null,
     *                   "status_history": [
     *                       {
     *                           "id": 2,
     *                           "created_at": "2025-12-05T12:03:09.000000Z",
     *                           "updated_at": "2025-12-05T12:03:09.000000Z",
     *                           "deleted_at": null,
     *                           "order_id": 2,
     *                           "status": "CONSOLIDATED",
     *                           "notes": "Well received",
     *                           "location": "USA",
     *                           "user_id": 1,
     *                           "user": {
     *                               "id": 1,
     *                               "full_name": "Thembo Charles",
     *                               "email": "ashley7520charles@gmail.com",
     *                               "phone": "0787444081",
     *                               "email_verified_at": null,
     *                               "tin": "110023452",
     *                               "passport": "65748",
     *                               "address": "Kampala",
     *                               "otp": "4782",
     *                               "status": "active",
     *                               "user_type": "user",
     *                               "created_at": "2025-12-05T06:42:09.000000Z",
     *                               "updated_at": "2025-12-05T07:58:28.000000Z",
     *                               "deleted_at": null
     *                           }
     *                       },
     *                       {
     *                           "id": 1,
     *                           "created_at": "2025-12-05T12:01:16.000000Z",
     *                           "updated_at": "2025-12-05T12:01:16.000000Z",
     *                           "deleted_at": null,
     *                           "order_id": 2,
     *                           "status": "RECEIVED",
     *                           "notes": "Well received",
     *                           "location": "USA",
     *                           "user_id": null,
     *                           "user": null
     *                       }
     *                   ],
     *                   "user": {
     *                       "id": 1,
     *                       "full_name": "Thembo Charles",
     *                       "email": "ashley7520charles@gmail.com",
     *                       "phone": "0787444081",
     *                      "email_verified_at": null,
     *                       "tin": "110023452",
     *                       "passport": "65748",
     *                       "address": "Kampala",
     *                       "otp": "4782",
     *                       "status": "active",
     *                       "user_type": "user",
     *                       "created_at": "2025-12-05T06:42:09.000000Z",
     *                       "updated_at": "2025-12-05T07:58:28.000000Z",
     *                       "deleted_at": null
     *                   }
     *               }
     *           ],
     *           "first_page_url": "http://127.0.0.1:8000/api/orders?page=1",
     *           "from": 1,
     *           "last_page": 1,
     *           "last_page_url": "http://127.0.0.1:8000/api/orders?page=1",
     *           "links": [
     *               {
     *                   "url": null,
     *                   "label": "&laquo; Previous",
     *                   "active": false
     *               },
     *               {
     *                   "url": "http://127.0.0.1:8000/api/orders?page=1",
     *                   "label": "1",
     *                   "active": true
     *               },
     *               {
     *                   "url": null,
     *                   "label": "Next &raquo;",
     *                   "active": false
     *               }
     *           ],
     *           "next_page_url": null,
     *           "path": "http://127.0.0.1:8000/api/orders",
     *           "per_page": 20,
     *           "prev_page_url": null,
     *           "to": 2,
     *           "total": 2
     *       }
     *   }
     * 
    **/
    public function index()
    {

        $orders =  Order::with('statusHistory','statusHistory.user','user','packages')->latest()->paginate(20);

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
     * @response {
     *   "status": "success",
     *   "data": {
     *       "id": 5,
     *       "created_at": "2025-12-05T12:20:11.000000Z",
     *       "updated_at": "2025-12-05T12:20:11.000000Z",
     *       "deleted_at": null,
     *       "tracking_number": "ORD-20251205-00002",
     *       "user_id": 1,
     *       "origin_country": "ITALY",
     *       "receiver_name": "Tom Mboya",
     *       "receiver_phone": "0789887766",
     *       "receiver_email": "tom.mboya@gmail.com",
     *       "receiver_address": "Uganda - Kampala",
     *       "status": "PENDING",
     *       "received_at": null,
     *       "dispatched_at": null,
     *       "arrived_at": null,
     *       "released_at": null,
     *       "delivered_at": null,
     *       "status_history": [
     *           {
     *               "id": 4,
     *               "created_at": "2025-12-05T12:27:49.000000Z",
     *               "updated_at": "2025-12-05T12:27:49.000000Z",
     *               "deleted_at": null,
     *               "order_id": 5,
     *               "status": "CONSOLIDATED",
     *               "notes": "Well received",
     *               "location": "USA",
     *               "user_id": 1,
     *               "user": {
     *                   "id": 1,
     *                   "full_name": "Thembo Charles",
     *                   "email": "ashley7520charles@gmail.com",
     *                   "phone": "0787444081",
     *                   "email_verified_at": null,
     *                   "tin": "110023452",
     *                   "passport": "65748",
     *                   "address": "Kampala",
     *                   "otp": "4782",
     *                   "status": "active",
     *                   "user_type": "user",
     *                   "created_at": "2025-12-05T06:42:09.000000Z",
     *                   "updated_at": "2025-12-05T07:58:28.000000Z",
     *                   "deleted_at": null
     *               }
     *           }
     *       ],
     *       "user": {
     *           "id": 1,
     *           "full_name": "Thembo Charles",
     *           "email": "ashley7520charles@gmail.com",
     *           "phone": "0787444081",
     *           "email_verified_at": null,
     *           "tin": "110023452",
     *           "passport": "65748",
     *           "address": "Kampala",
     *           "otp": "4782",
     *           "status": "active",
     *           "user_type": "user",
     *           "created_at": "2025-12-05T06:42:09.000000Z",
     *           "updated_at": "2025-12-05T07:58:28.000000Z",
     *           "deleted_at": null
     *       }
     *   }
     * }
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
