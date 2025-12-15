<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreInvoiceLineItemRequest;
use App\Http\Requests\UpdateInvoiceLineItemRequest;
use App\Models\InvoiceLineItem;
use Illuminate\Http\Request;

class InvoiceLineItemController extends Controller
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
     * Add Item to Invoice
     * 
     * @group Invoice  
     * @header Bearer Token    
     * @bodyParam invoice_id string required
     * @bodyParam description string required
     * @bodyParam quantity integer required
     * @bodyParam unit_price double required
     * @authenticated
     * @response  {
     *   "message": "Invoice line item created successfully",
     *   "data": {
     *       "invoice_id": "1",
     *       "description": "Cargo A",
     *       "quantity": "1",
     *       "unit_price": "30000",
     *       "updated_at": "2025-12-08T13:30:52.000000Z",
     *       "created_at": "2025-12-08T13:30:52.000000Z",
     *       "id": 1
     *   }
     * }
     * 
    **/
    public function store(StoreInvoiceLineItemRequest $request)
    {
        $item = InvoiceLineItem::create($request->validated());

        return response()->json([
            'message' => 'Invoice line item created successfully',
            'data'    => $item
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(InvoiceLineItem $invoiceLineItem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(InvoiceLineItem $invoiceLineItem)
    {
        //
    }

    /** 
     * Edit Invoice Item
     * 
     * @group Invoice  
     * @header Bearer Token    
     * @bodyParam invoice_id string required
     * @bodyParam description string required
     * @bodyParam quantity integer required
     * @bodyParam unit_price double required
     * @authenticated
     * @response  {
     *   "message": "Invoice line item updated successfully",
     *   "data": {
     *       "id": 2,
     *       "created_at": "2025-12-08T13:32:09.000000Z",
     *       "updated_at": "2025-12-08T13:32:09.000000Z",
     *       "deleted_at": null,
     *       "invoice_id": 1,
     *       "description": "Cargo A",
     *       "quantity": 1,
     *       "unit_price": 30000
     *   }
     * }
     * 
    **/
    public function update(UpdateInvoiceLineItemRequest $request, InvoiceLineItem $invoiceLineItem)
    {
        $invoiceLineItem->update($request->validated());

        return response()->json([
            'message' => 'Invoice line item updated successfully',
            'data'    => $invoiceLineItem
        ]);
    }

    /** 
     * Delete Invoice Item
     * 
     * @group Invoice  
     * @header Bearer Token 
     * @authenticated
     * @response  {
     *       "message": "Invoice line item deleted successfully"
     *   }
     * 
    **/
    public function destroy(InvoiceLineItem $invoiceLineItem)
    {
        $invoiceLineItem->delete(); // Soft Delete

        return response()->json([
            'message' => 'Invoice line item deleted successfully'
        ]);
    }

    /** 
     * Restore Invoice Item
     * 
     * @group Invoice  
     * @header Bearer Token 
     * @authenticated
     * @urlParam invoiceLineItem_id integer required
     * @response  {
     *       "message": "Invoice line item deleted successfully"
     *   }
     * 
    **/

    public function restore($id)
    {
        $item = InvoiceLineItem::withTrashed()->findOrFail($id);
        $item->restore();

        return response()->json([
            'message' => 'Invoice line item restored successfully',
            'data'    => $item
        ]);
    }
}
