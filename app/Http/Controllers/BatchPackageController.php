<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBatchPackageRequest;
use App\Models\BatchPackage;
use App\Models\ConsolidationBatche;
use App\Models\Package;
use Illuminate\Http\Request;

class BatchPackageController extends Controller
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
     * Add Package to Batch
     * 
     * @group Batch Package
     * @header Bearer Token    
     * 
     * @bodyParam batch_id integer required
     * @bodyParam package_id integer required
     * 
     * @authenticated
     * @response  {
     *          "status": "success", 
     *           "message": "Package added to batch successfully.",            
     *       }
     *   } 
     * 
    **/

    public function store(StoreBatchPackageRequest $request)
    {
       $batchPackage = BatchPackage::create([
            'batch_id'   => $request->batch_id,
            'package_id' => $request->package_id,
        ]);
      
        return response()->json([
            'message' => 'Package added to batch successfully',
            'data'    => $batchPackage
        ], 201);

    }

 
    public function show(BatchPackage $batchPackage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BatchPackage $batchPackage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BatchPackage $batchPackage)
    {
        //
    }

    /** 
     * Delete Consolidation Batch
     * 
     * @group Batch Package
     * @header Bearer Token    
     * 
     * @bodyParam batch_id integer required
     * @bodyParam package_id integer required
     * 
     * @authenticated
     * @response  {
     *          "status": "success", 
     *           "message": "Package removed from batch.",            
     *       }
     *   } 
     * 
    **/
   public function deleteByPair(Request $request)
    {
        $request->validate([
            'batch_id' => 'required|exists:consolidation_batches,id',
            'package_id' => 'required|exists:packages,id',
        ]);

        BatchPackage::where('batch_id', $request->batch_id)
                    ->where('package_id', $request->package_id)
                    ->forceDelete();

        return response()->json([
            'message' => 'Package removed from batch'
        ]);
    }
}
