<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDeliveryOrderRequest;
use App\Http\Requests\UpdateDeliveryOrderRequest;
use App\Models\DeliveryOrder;
use App\Models\User;
use Illuminate\Http\Request;

class DeliveryOrderController extends Controller
{


     /** 
     * Dashboard
     * 
     * @group Delivery Order  
     * @header Bearer Token
     * 
     * @authenticated
     * 
     * @response  {
     *   "total": 1,
     *   "pending": 1,
     *   "assigned": 0,
     *   "out": 0,
     *   "delivered": 0,
     *   "failed": 0,
     *   "today_deliveries": []
     * }
     * 
    **/

    public function dashboard()
    {
        return response()->json([
            'total'     => DeliveryOrder::count(),
            'pending'   => DeliveryOrder::where('status', 'PENDING')->count(),
            'assigned'  => DeliveryOrder::where('status', 'ASSIGNED')->count(),
            'out'       => DeliveryOrder::where('status', 'OUT_FOR_DELIVERY')->count(),
            'delivered' => DeliveryOrder::where('status', 'DELIVERED')->count(),
            'failed'    => DeliveryOrder::where('status', 'FAILED')->count(),
            'today_deliveries' => DeliveryOrder::with('order','order.packages','order.user')->whereDate('delivery_date', today())->get(),
        ]);
    }


    /** 
     * Delivery Orders
     * 
     * @group Delivery Order
     * 
     * @header Bearer Token
     * 
     * @authenticated
     * 
     * @response  {
     *   "current_page": 1,
     *   "data": [
     *       {
     *           "id": 4,
     *           "created_at": "2025-12-09T07:41:36.000000Z",
     *           "updated_at": "2025-12-09T08:12:25.000000Z",
     *           "deleted_at": null,
     *           "delivery_number": "DEL-000001",
     *           "order_id": 5,
     *           "rider_id": null,
     *           "delivery_address": "Kasese",
     *           "delivery_date": "2025-12-10",
     *           "status": "PENDING",
     *           "pod_signature": null,
     *           "pod_photo_path": "pod_photos/2akLAes8oj4j5OIxC71O5GxwEN8fSJ1jxtotKyxk.jpg",
     *           "delivery_notes": null,
     *           "delivered_at": null,
     *           "order": {
     *               "id": 5,
     *               "created_at": "2025-12-05T12:20:11.000000Z",
     *               "updated_at": "2025-12-05T12:20:11.000000Z",
     *               "deleted_at": null,
     *               "tracking_number": "ORD-20251205-00002",
     *               "user_id": 1,
     *               "origin_country": "ITALY",
     *               "receiver_name": "Tom Mboya",
     *               "receiver_phone": "0789887766",
     *               "receiver_email": "tom.mboya@gmail.com",
     *               "receiver_address": "Uganda - Kampala",
     *               "status": "PENDING",
     *               "received_at": null,
     *               "dispatched_at": null,
     *               "arrived_at": null,
     *               "released_at": null,
     *               "delivered_at": null,
     *               "packages": [
     *                   {
     *                       "id": 1,
     *                       "created_at": "2025-12-08T07:19:43.000000Z",
     *                       "updated_at": "2025-12-08T07:42:06.000000Z",
     *                       "deleted_at": null,
     *                       "order_id": 5,
     *                       "hwb_number": "HWB-2025128-0002",
     *                       "contents": "Computer - Desktop",
     *                       "declared_value": "2500000.00",
     *                       "weight": "5.00",
     *                       "length": "4.00",
     *                       "width": "6.00",
     *                       "height": "2.00",
     *                       "is_fragile": true,
     *                       "is_hazardous": false,
     *                       "is_damaged": false,
     *                       "package_photos": [
     *                           "package_photos/LXHHmhE4YM0YoTn1Lva95FSyQi31i89dskkPv2il.jpg",
     *                           "package_photos/thtdPXJtqtkpECHhbeyXIOAIMSGt564ZFIXBqdcp.jpg",
     *                           "package_photos/Uc34hnpyAPsAT1QINJfca0msaFdudcYfaY2Qs21h.jpg"
     *                       ],
     *                       "location_id": 1,
     *                       "received_at": "2025-12-03T00:00:00.000000Z"
     *                   },
     *                  
     *               ]
     *           }
     *       }
     *   ],
     *   "first_page_url": "http://127.0.0.1:8000/api/delivery/orders?page=1",
     *   "from": 1,
     *   "last_page": 1,
     *   "last_page_url": "http://127.0.0.1:8000/api/delivery/orders?page=1",
     *   "links": [
     *       {
     *           "url": null,
     *           "label": "&laquo; Previous",
     *           "active": false
     *       },
     *       {
     *           "url": "http://127.0.0.1:8000/api/delivery/orders?page=1",
     *           "label": "1",
     *           "active": true
     *       },
     *       {
     *           "url": null,
     *           "label": "Next &raquo;",
     *           "active": false
     *       }
     *   ],
     *   "next_page_url": null,
     *   "path": "http://127.0.0.1:8000/api/delivery/orders",
     *   "per_page": 20,
     *   "prev_page_url": null,
     *   "to": 1,
     *   "total": 1
     * }
     * 
    **/
    public function index()
    {
        return DeliveryOrder::with('order','order.packages')->latest()->paginate(20);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }


    /** 
     * Create Order Deliver
     * 
     * @group Delivery Order  
     * @header Bearer Token    
     * @bodyParam order_id integer required
     * @bodyParam delivery_address string required
     * @bodyParam delivery_date date required
     * @bodyParam delivery_notes string
     * @authenticated
     * @response  {
     *       "message": "Delivery order created successfully",
     *       "data": {
     *           "order_id": "5",
     *           "delivery_address": "Kasese",
     *           "delivery_date": "2025-12-10",
     *           "delivery_number": "DEL-000001",
     *           "updated_at": "2025-12-09T07:41:36.000000Z",
     *           "created_at": "2025-12-09T07:41:36.000000Z",
     *           "id": 4,
     *           "order": {
     *               "id": 5,
     *               "created_at": "2025-12-05T12:20:11.000000Z",
     *               "updated_at": "2025-12-05T12:20:11.000000Z",
     *               "deleted_at": null,
     *               "tracking_number": "ORD-20251205-00002",
     *               "user_id": 1,
     *               "origin_country": "ITALY",
     *               "receiver_name": "Tom Mboya",
     *               "receiver_phone": "0789887766",
     *               "receiver_email": "tom.mboya@gmail.com",
     *               "receiver_address": "Uganda - Kampala",
     *               "status": "PENDING",
     *               "received_at": null,
     *               "dispatched_at": null,
     *               "arrived_at": null,
     *               "released_at": null,
     *               "delivered_at": null,
     *               "packages": [
     *                   {
     *                       "id": 1,
     *                       "created_at": "2025-12-08T07:19:43.000000Z",
     *                       "updated_at": "2025-12-08T07:42:06.000000Z",
     *                       "deleted_at": null,
     *                       "order_id": 5,
     *                       "hwb_number": "HWB-2025128-0002",
     *                       "contents": "Computer - Desktop",
     *                       "declared_value": "2500000.00",
     *                       "weight": "5.00",
     *                       "length": "4.00",
     *                       "width": "6.00",
     *                       "height": "2.00",
     *                       "is_fragile": true,
     *                       "is_hazardous": false,
     *                       "is_damaged": false,
     *                       "package_photos": [
     *                           "package_photos/LXHHmhE4YM0YoTn1Lva95FSyQi31i89dskkPv2il.jpg",
     *                           "package_photos/thtdPXJtqtkpECHhbeyXIOAIMSGt564ZFIXBqdcp.jpg",
     *                           "package_photos/Uc34hnpyAPsAT1QINJfca0msaFdudcYfaY2Qs21h.jpg"
     *                       ],
     *                       "location_id": 1,
     *                       "received_at": "2025-12-03T00:00:00.000000Z"
     *                   },
     *                   {
     *                       "id": 2,
     *                       "created_at": "2025-12-08T07:32:17.000000Z",
     *                       "updated_at": "2025-12-08T07:32:17.000000Z",
     *                       "deleted_at": null,
     *                       "order_id": 5,
     *                       "hwb_number": "HWB-2025128-0021",
     *                       "contents": "Computer - Desktop",
     *                       "declared_value": "2500000.00",
     *                       "weight": "5.00",
     *                       "length": "4.00",
     *                       "width": "6.00",
     *                       "height": "2.00",
     *                       "is_fragile": true,
     *                       "is_hazardous": false,
     *                       "is_damaged": false,
     *                       "package_photos": null,
     *                       "location_id": 1,
     *                       "received_at": "2025-12-03T00:00:00.000000Z"
     *                   }
     *               ]
     *           }
     *       }
     *   }
     * 
    **/
  
    public function store(StoreDeliveryOrderRequest $request)
    {

        $order = DeliveryOrder::create($request->validated());

        return response()->json([
            'message' => 'Delivery order created successfully',
            'data'    => $order->load('order','order.packages')
        ], 201);

    }


    /** 
     * Single Delivery Order
     * 
     * @group Delivery Order
     * 
     * @header Bearer Token
     * 
     * @authenticated
     * 
     * @response  {
     *   "message": "Delivery order",
     *   "data": {
     *       "id": 4,
     *       "created_at": "2025-12-09T07:41:36.000000Z",
     *       "updated_at": "2025-12-09T08:12:25.000000Z",
     *       "deleted_at": null,
     *       "delivery_number": "DEL-000001",
     *       "order_id": 5,
     *       "rider_id": null,
     *       "delivery_address": "Kasese",
     *       "delivery_date": "2025-12-10",
     *       "status": "PENDING",
     *       "pod_signature": null,
     *       "pod_photo_path": "pod_photos/2akLAes8oj4j5OIxC71O5GxwEN8fSJ1jxtotKyxk.jpg",
     *       "delivery_notes": null,
     *       "delivered_at": null,
     *       "order": {
     *           "id": 5,
     *           "created_at": "2025-12-05T12:20:11.000000Z",
     *           "updated_at": "2025-12-05T12:20:11.000000Z",
     *           "deleted_at": null,
     *           "tracking_number": "ORD-20251205-00002",
     *           "user_id": 1,
     *           "origin_country": "ITALY",
     *           "receiver_name": "Tom Mboya",
     *           "receiver_phone": "0789887766",
     *           "receiver_email": "tom.mboya@gmail.com",
     *           "receiver_address": "Uganda - Kampala",
     *           "status": "PENDING",
     *           "received_at": null,
     *           "dispatched_at": null,
     *           "arrived_at": null,
     *           "released_at": null,
     *           "delivered_at": null,
     *           "packages": [
     *               {
     *                   "id": 1,
     *                   "created_at": "2025-12-08T07:19:43.000000Z",
     *                   "updated_at": "2025-12-08T07:42:06.000000Z",
     *                   "deleted_at": null,
     *                   "order_id": 5,
     *                   "hwb_number": "HWB-2025128-0002",
     *                   "contents": "Computer - Desktop",
     *                   "declared_value": "2500000.00",
     *                   "weight": "5.00",
     *                   "length": "4.00",
     *                   "width": "6.00",
     *                   "height": "2.00",
     *                   "is_fragile": true,
     *                   "is_hazardous": false,
     *                   "is_damaged": false,
     *                   "package_photos": [
     *                       "package_photos/LXHHmhE4YM0YoTn1Lva95FSyQi31i89dskkPv2il.jpg",
     *                       "package_photos/thtdPXJtqtkpECHhbeyXIOAIMSGt564ZFIXBqdcp.jpg",
     *                       "package_photos/Uc34hnpyAPsAT1QINJfca0msaFdudcYfaY2Qs21h.jpg"
     *                   ],
     *                   "location_id": 1,
     *                   "received_at": "2025-12-03T00:00:00.000000Z"
     *               },
     *               {
     *                   "id": 2,
     *                   "created_at": "2025-12-08T07:32:17.000000Z",
     *                   "updated_at": "2025-12-08T07:32:17.000000Z",
     *                   "deleted_at": null,
     *                   "order_id": 5,
     *                   "hwb_number": "HWB-2025128-0021",
     *                   "contents": "Computer - Desktop",
     *                   "declared_value": "2500000.00",
     *                   "weight": "5.00",
     *                   "length": "4.00",
     *                   "width": "6.00",
     *                   "height": "2.00",
     *                   "is_fragile": true,
     *                   "is_hazardous": false,
     *                   "is_damaged": false,
     *                   "package_photos": null,
     *                   "location_id": 1,
     *                   "received_at": "2025-12-03T00:00:00.000000Z"
     *               }
     *           ],
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
     * }
     * 
    **/
    public function show($deliveryOrder_id)
    {

        $deliveryOrder = DeliveryOrder::with('order','order.packages','order.user')->find($deliveryOrder_id);

        return response()->json([
            'message' => 'Delivery order',
            'data'    => $deliveryOrder
        ], 201);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DeliveryOrder $deliveryOrder)
    {
        //
    }

    /** 
     * Update Order Deliver
     * 
     * @group Delivery Order  
     * @header Bearer Token    
     * @bodyParam delivery_address string required
     * @bodyParam delivery_date date required
     * @bodyParam delivery_notes string
     * @urlParam deliveryOrder_id integer required
     * 
     * @authenticated
     * 
     * @response  {
     *       "message": "Delivery order updated successfully",
     *       "data": {
     *           "order_id": "5",
     *           "delivery_address": "Kasese",
     *           "delivery_date": "2025-12-10",
     *           "delivery_number": "DEL-000001",
     *           "updated_at": "2025-12-09T07:41:36.000000Z",
     *           "created_at": "2025-12-09T07:41:36.000000Z",
     *           "id": 4,
     *           "order": {
     *               "id": 5,
     *               "created_at": "2025-12-05T12:20:11.000000Z",
     *               "updated_at": "2025-12-05T12:20:11.000000Z",
     *               "deleted_at": null,
     *               "tracking_number": "ORD-20251205-00002",
     *               "user_id": 1,
     *               "origin_country": "ITALY",
     *               "receiver_name": "Tom Mboya",
     *               "receiver_phone": "0789887766",
     *               "receiver_email": "tom.mboya@gmail.com",
     *               "receiver_address": "Uganda - Kampala",
     *               "status": "PENDING",
     *               "received_at": null,
     *               "dispatched_at": null,
     *               "arrived_at": null,
     *               "released_at": null,
     *               "delivered_at": null,
     *               "packages": [
     *                   {
     *                       "id": 1,
     *                       "created_at": "2025-12-08T07:19:43.000000Z",
     *                       "updated_at": "2025-12-08T07:42:06.000000Z",
     *                       "deleted_at": null,
     *                       "order_id": 5,
     *                       "hwb_number": "HWB-2025128-0002",
     *                       "contents": "Computer - Desktop",
     *                       "declared_value": "2500000.00",
     *                       "weight": "5.00",
     *                       "length": "4.00",
     *                       "width": "6.00",
     *                       "height": "2.00",
     *                       "is_fragile": true,
     *                       "is_hazardous": false,
     *                       "is_damaged": false,
     *                       "package_photos": [
     *                           "package_photos/LXHHmhE4YM0YoTn1Lva95FSyQi31i89dskkPv2il.jpg",
     *                           "package_photos/thtdPXJtqtkpECHhbeyXIOAIMSGt564ZFIXBqdcp.jpg",
     *                           "package_photos/Uc34hnpyAPsAT1QINJfca0msaFdudcYfaY2Qs21h.jpg"
     *                       ],
     *                       "location_id": 1,
     *                       "received_at": "2025-12-03T00:00:00.000000Z"
     *                   },
     *                   {
     *                       "id": 2,
     *                       "created_at": "2025-12-08T07:32:17.000000Z",
     *                       "updated_at": "2025-12-08T07:32:17.000000Z",
     *                       "deleted_at": null,
     *                       "order_id": 5,
     *                       "hwb_number": "HWB-2025128-0021",
     *                       "contents": "Computer - Desktop",
     *                       "declared_value": "2500000.00",
     *                       "weight": "5.00",
     *                       "length": "4.00",
     *                       "width": "6.00",
     *                       "height": "2.00",
     *                       "is_fragile": true,
     *                       "is_hazardous": false,
     *                       "is_damaged": false,
     *                       "package_photos": null,
     *                       "location_id": 1,
     *                       "received_at": "2025-12-03T00:00:00.000000Z"
     *                   }
     *               ]
     *           }
     *       }
     *   }
     * 
    **/
   
    public function update(UpdateDeliveryOrderRequest $request, $deliveryOrder_id)
    {      

        $deliveryOrder = DeliveryOrder::find($deliveryOrder_id);

        $deliveryOrder->update($request->validated());

        return response()->json([
            'message' => 'Delivery order updated successfully',
            'data'    => $deliveryOrder->load('order','order.packages'),
        ]);

    }

    /** 
     * Delete Delivery Order
     * 
     * @group Delivery Order  
     * @header Bearer Token
     * @urlParam deliveryOrder_id integer required
     * @authenticated
     * @response  {
     *          "status": "success", 
     *           "message": "Delivery order deleted successfully",            
     *       } 
     * 
    **/

    public function destroy($deliveryOrder_id)
    {

        $deliveryOrder = DeliveryOrder::find($deliveryOrder_id);

        $deliveryOrder->delete();

        return response()->json([
            'message' => 'Delivery order deleted successfully'
        ]);

    }

    /** 
     * Upload a point of Delivery photo
     * 
     * @group Delivery Order  
     * @header Bearer Token
     * @urlParam delivery_order_id integer required
     * @bodyParam pod_photo file required
     * @authenticated
     * @response  {
     *       "message": "Point Of Delivery photo uploaded successfully",
     *       "photo_url": "pod_photos/2akLAes8oj4j5OIxC71O5GxwEN8fSJ1jxtotKyxk.jpg"
     *   }
     * 
    **/

    public function uploadPod(Request $request, $delivery_order_id)
    {

        $delivery_order = DeliveryOrder::find($delivery_order_id);

        $request->validate([
            'pod_photo' => 'required|image',
        ]);

        $path = $request->file('pod_photo')->store('pod_photos', 'public');

        $delivery_order->update([
            'pod_photo_path' => $path,
        ]);

        return response()->json([
            'message' => 'Point Of Delivery photo uploaded successfully',
            'photo_url' => $path
        ]);
        
    }

    /** 
     * Upload Customer Delivery Signature
     * 
     * @group Delivery Order  
     * @header Bearer Token
     * @urlParam delivery_order_id integer required
     * @bodyParam signature string required
     * @authenticated
     * @response  {
     *       "message": "Signature saved successfully",        
     *   }
     * 
    **/


    public function uploadSignature(Request $request, $delivery_order_id)
    {

        $delivery_order = DeliveryOrder::find($delivery_order_id);

        $request->validate([
            'signature' => 'required|string'
        ]);

        $delivery_order->update([
            'pod_signature' => $request->signature
        ]);

        return response()->json([
            'message' => 'Signature saved successfully'
        ]);

    }


    /** 
     * Update Delivery Order status
     * 
     * @group Delivery Order  
     * @header Bearer Token
     * @urlParam delivery_order_id integer required
     * @bodyParam rider_id integer
     * @bodyParam reason string
     * @bodyParam status string required Example: PENDING,ASSIGNED,OUT_FOR_DELIVERY,DELIVERED,FAILED
     * @authenticated
     * @response  {
     *       "message": "Rider assigned successfully",        
     *   }
     * 
    **/


    public function updateStatus(Request $request, $delivery_order_id)
    {

        $request->validate([         
            'status' => 'required|string|in:PENDING,ASSIGNED,OUT_FOR_DELIVERY,DELIVERED,FAILED'
        ]);
      
        $delivery_order = DeliveryOrder::find($delivery_order_id);        

        switch ($request->delivery_status) {

            case 'ASSIGNED':

                $request->validate([
                    'rider_id' => 'required|exists:user,id',
                    'reason' => 'sometimes|string'
                ]);

                $delivery_order->update([
                    'rider_id' => $request->rider_id,
                    'status' => 'ASSIGNED',
                    'delivery_notes' => $request->reason,
                ]);

                return response()->json([
                    'message' => 'Rider assigned successfully',
                    'data' => $delivery_order
                ]);

                break;

            case 'OUT_FOR_DELIVERY':

                $request->validate([         
                    'reason' => 'sometimes|string'
                ]);

                $delivery_order->update([
                    'status' => $request->delivery_status,
                    'delivery_notes' => $request->reason,
                ]);

                return response()->json([
                    'message' => 'Order is now out for delivery',
                    'data' => $delivery_order
                ]);

                break;

            case 'DELIVERED':

                $delivery_order->update([
                    'status' => 'DELIVERED',
                    'delivered_at' => now(),
                    'delivery_notes' => $request->reason,
                ]);

                return response()->json([
                    'message' => 'Delivery marked as completed',
                    'data' => $delivery_order
                ]);

                break;

            case 'FAILED':

                $request->validate([
                    'reason' => 'required|string'
                ]);

                $delivery_order->update([
                    'status' => 'FAILED',
                    'delivery_notes' => $request->reason,
                ]);

                return response()->json([
                    'message' => 'Delivery marked as failed',
                    'data' => $delivery_order
                ]);
                break;

             
            default:
             
                break;
        }       
 
    }


    
    /** 
     * Riders
     * 
     * @group Delivery Order  
     * @header Bearer Token
     * 
     * @authenticated
     * @response {
     *       "message": "Riders",
     *       "data": [
     *           {
     *               "id": 1,
     *               "full_name": "Thembo Charles",
     *               "phone": "0787444081",
     *               "email": "ashley7520charles@gmail.com"
     *           }
     *       ]
     *   }
     * 
     * 
    **/

    function riders(){

        $staff = User::select('id','full_name','phone','email')->where('user_type','user')->where('status','active')->get();

        return response()->json([
            'message' => 'Riders',
            'data' => $staff
        ]);
        
    }


}
