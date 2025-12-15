<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreConsolidationBatchRequest;
use App\Http\Requests\UpdateConsolidationBatchRequest;
use App\Models\ConsolidationBatche;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ConsolidationBatcheController extends Controller
{


    /** 
     * Consolidation Batches
     * 
     * @group Consolidation Batch  
     * @header Bearer Token    
     * @authenticated
     * @response [        
     *   {
     *       "id": 1,
     *       "created_at": "2025-12-08T08:21:32.000000Z",
     *       "updated_at": "2025-12-08T08:40:10.000000Z",
     *       "deleted_at": null,
     *       "mawb_number": "MAWB-20251208-001",
     *       "transport_mode": "AIR",
     *       "container_flight_number": "AB001",
     *       "departure_date": "2025-12-10T00:00:00.000000Z",
     *       "status": "FINALIZED",
     *       "package_count": 0,
     *       "total_weight": "0.00",
     *       "created_by": 1,
     *       "finalized_at": "2025-12-09T00:00:00.000000Z",
     *       "departed_at": "2025-12-10T00:00:00.000000Z",
     *       "arrived_at": "2025-12-10T00:00:00.000000Z",
     *       "packages": [
     *           {
     *               "id": 1,
     *               "created_at": "2025-12-08T07:19:43.000000Z",
     *               "updated_at": "2025-12-08T07:42:06.000000Z",
     *               "deleted_at": null,
     *               "order_id": 5,
     *               "hwb_number": "HWB-2025128-0002",
     *               "contents": "Computer - Desktop",
     *               "declared_value": "2500000.00",
     *               "weight": "5.00",
     *               "length": "4.00",
     *               "width": "6.00",
     *               "height": "2.00",
     *               "is_fragile": true,
     *               "is_hazardous": false,
     *               "is_damaged": false,
     *               "package_photos": [
     *                   "package_photos/LXHHmhE4YM0YoTn1Lva95FSyQi31i89dskkPv2il.jpg",
     *                   "package_photos/thtdPXJtqtkpECHhbeyXIOAIMSGt564ZFIXBqdcp.jpg",
     *                   "package_photos/Uc34hnpyAPsAT1QINJfca0msaFdudcYfaY2Qs21h.jpg"
     *               ],
     *               "location_id": 1,
     *               "received_at": "2025-12-03T00:00:00.000000Z",
     *               "pivot": {
     *                   "batch_id": 1,
     *                   "package_id": 1,
     *                   "created_at": "2025-12-08T08:57:19.000000Z",
     *                   "updated_at": "2025-12-08T08:57:19.000000Z"
     *               },
     *               "order": {
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
     *               }
     *           }
     *       ]
     *   }
     * ]
     * 
    **/

    public function index()
    {
        return ConsolidationBatche::with('packages','packages.order','packages.order.user')->latest()->get();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }


    /** 
     * Create a Consolidation Batch
     * 
     * @group Consolidation Batch  
     * @header Bearer Token    
     * @bodyParam mawb_number string required
     * @bodyParam transport_mode string required e.g 'AIR', 'SEA', 'ROAD', 'TRAIN'
     * @bodyParam container_flight_number string required
     * @bodyParam departure_date date required
     * @authenticated
     * @response  {
     *       "message": "Consolidation batch created successfully",
     *       "data": {
     *           "mawb_number": "MAWB-20251208-002",
     *           "transport_mode": "AIR",
     *           "container_flight_number": "AB001",
     *           "departure_date": "2025-12-10T00:00:00.000000Z",
     *           "departed_at": "2025-12-10T00:00:00.000000Z",
     *           "created_by": 1,
     *           "updated_at": "2025-12-08T08:27:36.000000Z",
     *           "created_at": "2025-12-08T08:27:36.000000Z",
     *           "id": 3,
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

  
    public function store(StoreConsolidationBatchRequest $request)
    {

        $data = $request->validated();

        $data['created_by'] = Auth::id();
        
        $batch = ConsolidationBatche::create($data);

        return response()->json([
            'message' => 'Consolidation batch created successfully',
            'data'    => $batch->load('user')
        ]);

    }


    /** 
     * Consolidation Batch
     * 
     * @group Consolidation Batch  
     * @header Bearer Token    
     * @authenticated
     * @response [        
     *   {
     *       "id": 1,
     *       "created_at": "2025-12-08T08:21:32.000000Z",
     *       "updated_at": "2025-12-08T08:40:10.000000Z",
     *       "deleted_at": null,
     *       "mawb_number": "MAWB-20251208-001",
     *       "transport_mode": "AIR",
     *       "container_flight_number": "AB001",
     *       "departure_date": "2025-12-10T00:00:00.000000Z",
     *       "status": "FINALIZED",
     *       "package_count": 0,
     *       "total_weight": "0.00",
     *       "created_by": 1,
     *       "finalized_at": "2025-12-09T00:00:00.000000Z",
     *       "departed_at": "2025-12-10T00:00:00.000000Z",
     *       "arrived_at": "2025-12-10T00:00:00.000000Z",
     *       "packages": [
     *           {
     *               "id": 1,
     *               "created_at": "2025-12-08T07:19:43.000000Z",
     *               "updated_at": "2025-12-08T07:42:06.000000Z",
     *               "deleted_at": null,
     *               "order_id": 5,
     *               "hwb_number": "HWB-2025128-0002",
     *               "contents": "Computer - Desktop",
     *               "declared_value": "2500000.00",
     *               "weight": "5.00",
     *               "length": "4.00",
     *               "width": "6.00",
     *               "height": "2.00",
     *               "is_fragile": true,
     *               "is_hazardous": false,
     *               "is_damaged": false,
     *               "package_photos": [
     *                   "package_photos/LXHHmhE4YM0YoTn1Lva95FSyQi31i89dskkPv2il.jpg",
     *                   "package_photos/thtdPXJtqtkpECHhbeyXIOAIMSGt564ZFIXBqdcp.jpg",
     *                   "package_photos/Uc34hnpyAPsAT1QINJfca0msaFdudcYfaY2Qs21h.jpg"
     *               ],
     *               "location_id": 1,
     *               "received_at": "2025-12-03T00:00:00.000000Z",
     *               "pivot": {
     *                   "batch_id": 1,
     *                   "package_id": 1,
     *                   "created_at": "2025-12-08T08:57:19.000000Z",
     *                   "updated_at": "2025-12-08T08:57:19.000000Z"
     *               },
     *               "order": {
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
     *               }
     *           }
     *       ]
     *   }
     * ]
     * 
    **/
 
    public function show($consolidationBatch_id)
    {
       return ConsolidationBatche::with('packages','packages.order','packages.order.user')->findOrFail($consolidationBatch_id);
    }

 
    public function edit(ConsolidationBatche $consolidationBatche)
    {
        //
    }

    /** 
     * Update a Consolidation Batch
     * 
     * @group Consolidation Batch  
     * @header Bearer Token    
     * @urlParam consolidationBatche_id integer required
     * @bodyParam mawb_number string required
     * @bodyParam transport_mode string required e.g 'AIR', 'SEA', 'ROAD', 'TRAIN'
     * @bodyParam container_flight_number string required
     * @bodyParam departure_date date required
     * @bodyParam status string e.g OPEN,FINALIZED,DEPARTED,ARRIVED
     * @bodyParam finalized_at date required
     * @bodyParam departed_at date required
     * @bodyParam arrived_at date required
     * @authenticated
     * @response  {
     *       "message": "Consolidation batch updated successfully",
     *       "data": {
     *           "mawb_number": "MAWB-20251208-002",
     *           "transport_mode": "AIR",
     *           "container_flight_number": "AB001",
     *           "departure_date": "2025-12-10T00:00:00.000000Z",
     *           "departed_at": "2025-12-10T00:00:00.000000Z",
     *           "created_by": 1,
     *           "updated_at": "2025-12-08T08:27:36.000000Z",
     *           "created_at": "2025-12-08T08:27:36.000000Z",
     *           "id": 3,
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
   
    public function update(UpdateConsolidationBatchRequest $request, $consolidationBatche_id)
    {

        $batch = ConsolidationBatche::findOrFail($consolidationBatche_id);

        $batch->update($request->validated());

        return response()->json([
            'message' => 'Consolidation batch updated successfully',
            'data'    => $batch
        ]);

    }


    /** 
     * Delete Consolidation Batch
     * 
     * @group Consolidation Batch  
     * @header Bearer Token    
     * @urlParam consolidationBatche_id integer required 
     * @authenticated
     * @response  {
     *          "status": "success", 
     *           "message": "Consolidation batch deleted successfully.",            
     *       }
     *   } 
     * 
    **/
    
    public function destroy($consolidationBatche_id)
    {

        $batch = ConsolidationBatche::findOrFail($consolidationBatche_id);

        $batch->delete();

        return response()->json([
            'message' => 'Consolidation batch deleted successfully'
        ]);

    }
}
