<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAssistedShoppingQuoteRequest;
use App\Http\Requests\UpdateAssistedShoppingQuoteRequest;
use App\Models\AssistedShoppingQuote;
use Illuminate\Http\Request;

class AssistedShoppingQuoteController extends Controller
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
     * Add Assistedshopping Quote Item
     * 
     * @group AssistedShopping
     * @header Bearer Token    
     * 
     * @bodyParam item_name string required
     * @bodyParam quantity integer required
     * @bodyParam unit_price double required
     * @bodyParam assisted_shopping_id integer required
     * 
     * @authenticated
     * 
    **/
    public function store(StoreAssistedShoppingQuoteRequest $request)
    {

         $request->validated();
        $quote = AssistedShoppingQuote::create($request->validated());
        
        return response()->json([
            'message' => 'Item added',
            'data'    => $quote
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(AssistedShoppingQuote $assistedShoppingQuote)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($assistedShoppingQuote)
    {
        //
    }

    /** 
     * Update Assisted shopping Quote
     * 
     * @group AssistedShopping
     * @header Bearer Token    
     * 
     * @bodyParam item_name string  
     * @bodyParam quantity integer  
     * @bodyParam unit_price double  
     * @bodyParam assisted_shopping_id integer
     * @urlParam assistedShoppingQuote_id integer required
     * 
     * @authenticated
     * 
    **/
    public function update(UpdateAssistedShoppingQuoteRequest $request, $assistedShoppingQuote_id)
    {

        $quote = AssistedShoppingQuote::findOrFail($assistedShoppingQuote_id);

        $quote->update($request->validated());

        return response()->json([
            'message' => 'Item updated successfully',
            'data'    => $quote,
        ]);

        
    }

  
    /** 
     * Delete Assisted shopping Quote item
     * 
     * @group AssistedShopping
     * @header Bearer Token    
     * 
     * @urlParam assistedShoppingQuote_id integer required
     * 
     * @authenticated
     * 
    **/
    public function destroy(AssistedShoppingQuote $assistedShoppingQuote)
    {

        $assistedShoppingQuote->delete();

        return response()->json([
            'message' => 'Item deleted successfully',
     
        ]);
    }
}
