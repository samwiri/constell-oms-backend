<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePaymentRequest;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    /** 
     * Payments
     * 
     * @group Invoice  
     * @header Bearer Token    
     *  
     * @authenticated
     *  
     * 
    **/
    public function index()
    {
        $payments = Payment::with('invoice','invoice.order','assisted_shopping','user')->paginate(50);

        return response()->json([
            'message' => 'Payments',
            'data'    => $payments
        ], 201);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }


    /** 
     * Record Invoice Payment
     * 
     * @group Invoice  
     * @header Bearer Token    
     * @bodyParam invoice_id integer
     * @bodyParam assisted_shopping_id integer
     * @bodyParam amount double required
     * @bodyParam method string required Example: MOBILE_MONEY,CARD,BANK_TRANSFER,CASH
     * @bodyParam paid_at date required
     * @authenticated
     * @response  {
     *       "message": "Payment recorded successfully",
     *       "data": {
     *           "invoice_id": "1",
     *           "amount": "30000",
     *           "method": "CASH",
     *           "paid_at": "2025-12-08",
     *           "updated_at": "2025-12-08T13:47:08.000000Z",
     *           "created_at": "2025-12-08T13:47:08.000000Z",
     *           "id": 1
     *       }
     *   }
     * 
    **/
 
    public function store(StorePaymentRequest $request)
    {

        $data = $request->validated();

        $data['user_id'] = Auth::id();

        $payment = Payment::create($data);

        return response()->json([
            'message' => 'Payment recorded successfully',
            'data'    => $payment
        ], 201);

       
    }

    /**
     * Display the specified resource.
     */
    public function show(Payment $payment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Payment $payment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Payment $payment)
    {
        //
    }

    /** 
     * Delete Invoice Payment
     * 
     * @group Invoice  
     * @header Bearer Token    
     * @urlParam payment_id date required
     * @authenticated
     * @response  {
     *       "message": "Payment deleted successfully",
     *   }
     * 
    **/
    public function destroy(Payment $payment)
    {
        $payment->delete();

        return response()->json([
            'message' => 'Payment deleted successfully'
        ]);
    }
}
