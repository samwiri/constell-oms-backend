<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreInvoiceRequest;
use App\Http\Requests\UpdateInvoiceRequest;
use App\Models\Invoice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InvoiceController extends Controller
{
  /** 
     * Make an Invoice
     * 
     * @group Invoice  
     * @header Bearer Token    
     * @authenticated
     * @response  {
     *       "message": "Invoices fetched successfully",
     *       "data": {
     *           "current_page": 1,
     *           "data": [
     *               {
     *                   "id": 2,
     *                   "created_at": "2025-12-08T10:31:55.000000Z",
     *                   "updated_at": "2025-12-08T10:42:55.000000Z",
     *                   "deleted_at": null,
     *                   "invoice_number": "INV-20251208-00002",
     *                   "user_id": 1,
     *                   "order_id": 5,
     *                   "type": "FREIGHT",
     *                   "status": "PAID",
     *                   "due_date": "2005-12-09T00:00:00.000000Z",
     *                   "order": {
     *                       "id": 5,
     *                       "created_at": "2025-12-05T12:20:11.000000Z",
     *                       "updated_at": "2025-12-05T12:20:11.000000Z",
     *                       "deleted_at": null,
     *                       "tracking_number": "ORD-20251205-00002",
     *                       "user_id": 1,
     *                       "origin_country": "ITALY",
     *                       "receiver_name": "Tom Mboya",
     *                       "receiver_phone": "0789887766",
     *                       "receiver_email": "tom.mboya@gmail.com",
     *                       "receiver_address": "Uganda - Kampala",
     *                       "status": "PENDING",
     *                       "received_at": null,
     *                       "dispatched_at": null,
     *                       "arrived_at": null,
     *                       "released_at": null,
     *                       "delivered_at": null,
     *                       "user": {
     *                           "id": 1,
     *                           "full_name": "Thembo Charles",
     *                           "email": "ashley7520charles@gmail.com",
     *                           "phone": "0787444081",
     *                           "email_verified_at": null,
     *                           "tin": "110023452",
     *                           "passport": "65748",
     *                           "address": "Kampala",
     *                           "otp": "4782",
     *                           "status": "active",
     *                           "user_type": "user",
     *                           "created_at": "2025-12-05T06:42:09.000000Z",
     *                           "updated_at": "2025-12-05T07:58:28.000000Z",
     *                           "deleted_at": null
     *                       }
     *                   },
     *                   "line_items": [],
     *                   "payments": []
     *               },
     *               {
     *                   "id": 1,
     *                   "created_at": "2025-12-08T10:31:08.000000Z",
     *                   "updated_at": "2025-12-08T10:31:08.000000Z",
     *                   "deleted_at": null,
     *                   "invoice_number": "ORD-20251208-00001",
     *                   "user_id": 1,
     *                   "order_id": 5,
     *                   "type": "FREIGHT",
     *                   "status": "UNPAID",
     *                   "due_date": "2005-12-09T00:00:00.000000Z",
     *                   "order": {
     *                       "id": 5,
     *                       "created_at": "2025-12-05T12:20:11.000000Z",
     *                       "updated_at": "2025-12-05T12:20:11.000000Z",
     *                       "deleted_at": null,
     *                       "tracking_number": "ORD-20251205-00002",
     *                       "user_id": 1,
     *                       "origin_country": "ITALY",
     *                       "receiver_name": "Tom Mboya",
     *                       "receiver_phone": "0789887766",
     *                       "receiver_email": "tom.mboya@gmail.com",
     *                       "receiver_address": "Uganda - Kampala",
     *                       "status": "PENDING",
     *                       "received_at": null,
     *                       "dispatched_at": null,
     *                       "arrived_at": null,
     *                       "released_at": null,
     *                       "delivered_at": null,
     *                       "user": {
     *                           "id": 1,
     *                           "full_name": "Thembo Charles",
     *                           "email": "ashley7520charles@gmail.com",
     *                           "phone": "0787444081",
     *                           "email_verified_at": null,
     *                           "tin": "110023452",
     *                           "passport": "65748",
     *                           "address": "Kampala",
     *                           "otp": "4782",
     *                           "status": "active",
     *                           "user_type": "user",
     *                           "created_at": "2025-12-05T06:42:09.000000Z",
     *                           "updated_at": "2025-12-05T07:58:28.000000Z",
     *                           "deleted_at": null
     *                       }
     *                   },
     *                   "line_items": [],
     *                   "payments": []
     *               }
     *           ],
     *           "first_page_url": "http://127.0.0.1:8000/api/billing/invoices?page=1",
     *           "from": 1,
     *           "last_page": 1,
     *           "last_page_url": "http://127.0.0.1:8000/api/billing/invoices?page=1",
     *           "links": [
     *               {
     *                   "url": null,
     *                   "label": "&laquo; Previous",
     *                   "active": false
     *               },
     *               {
     *                   "url": "http://127.0.0.1:8000/api/billing/invoices?page=1",
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
     *           "path": "http://127.0.0.1:8000/api/billing/invoices",
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
        $invoices = Invoice::latest()->with('order','order.user','lineItems','payments')->paginate(20);

        return response()->json([
            'message' => 'Invoices fetched successfully',
            'data'    => $invoices
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
     * Make an Invoice
     * 
     * @group Invoice  
     * @header Bearer Token    
     * @bodyParam order_id string required
     * @bodyParam type string required Example: FREIGHT,STORAGE,CUSTOMS,OTHER
     * @bodyParam due_date date required
     * @authenticated
     * @response {
     *   "message": "Invoice created successfully",
     *   "data": {
     *       "order_id": "5",
     *       "type": "FREIGHT",
     *       "due_date": "2005-12-09T00:00:00.000000Z",
     *       "user_id": 1,
     *       "invoice_number": "INV-20251208-00002",
     *       "updated_at": "2025-12-08T10:31:55.000000Z",
     *       "created_at": "2025-12-08T10:31:55.000000Z",
     *       "id": 2,
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
     *           "delivered_at": null
     *       }
     *   }
     *   }
     * 
    **/
    public function store(StoreInvoiceRequest $request)
    {

        $data = $request->validated();

        $data['user_id'] = Auth::id();

        $data['invoice_number'] = Invoice::generateInvoiceNumber();

        $invoice = Invoice::create($data);

        return response()->json([
            'message' => 'Invoice created successfully',
            'data'    => $invoice->load('order')
        ], 201);

    }

    /**
     * Display the specified resource.
     */
    public function show(Invoice $invoice)
    {
        return response()->json([
            'message' => 'Invoice fetched successfully',
            'data'    => $invoice
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Invoice $invoice)
    {
        //
    }

    /** 
     * Update an Invoice
     * 
     * @group Invoice  
     * @header Bearer Token    
     * @bodyParam type string required Example: FREIGHT,STORAGE,CUSTOMS,OTHER
     * @bodyParam status string Example: UNPAID,PAID,OVERDUE,CANCELLED
     * @bodyParam due_date date required
     * @authenticated
     * @response {
     *   "message": "Invoice Updated successfully",
     *   "data": {
     *       "order_id": "5",
     *       "type": "FREIGHT",
     *       "due_date": "2005-12-09T00:00:00.000000Z",
     *       "user_id": 1,
     *       "invoice_number": "INV-20251208-00002",
     *       "updated_at": "2025-12-08T10:31:55.000000Z",
     *       "created_at": "2025-12-08T10:31:55.000000Z",
     *       "id": 2,
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
     *           "delivered_at": null
     *       }
     *   }
     *  }
     * 
    **/
    public function update(UpdateInvoiceRequest $request, Invoice $invoice)
    {
        $invoice->update($request->validated());

        return response()->json([
            'message' => 'Invoice updated successfully',
            'data'    => $invoice->load('order')
        ]);
    }

    /** 
     * Delete Invoice
     * 
     * @group Invoice  
     * @header Bearer Token
     * @urlParam invoice_id integer required
     * @authenticated
     * @response  {
     *          "status": "success", 
     *           "message": "Invoice deleted successfully",            
     *       }
     *   } 
     * 
    **/

    public function destroy(Invoice $invoice)
    {
        $invoice->delete(); // Soft delete

        return response()->json([
            'message' => 'Invoice deleted successfully'
        ]);
    }


    /** 
     * Restore Invoice
     * 
     * @group Invoice  
     * @header Bearer Token
     * @urlParam invoice_id integer required
     * @authenticated
     * @response  {
     *          "status": "success", 
     *           "message": "Invoice restored successfully",            
     *       }
     *   } 
     * 
    **/

    public function restore($id)
    {
        $invoice = Invoice::withTrashed()->with('order')->findOrFail($id);

        $invoice->restore();

        return response()->json([
            'message' => 'Invoice restored successfully',
            'data'    => $invoice
        ]);
    }
}
