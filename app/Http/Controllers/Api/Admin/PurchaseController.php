<?php 

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PurchaseModel;

class PurchaseController extends Controller
{
    private function validation(Request $request)
    {
        return $request->validate([
            'vendor_id' => 'required|numeric',
            'bill_no' => 'required|string|max:50',
            'purchase_date' => 'required|date',
            'subtotal' => 'required|numeric',
            'grand_total' => 'required|numeric',
            'payment_status' => 'required|string|max:50'
        ]);
    }

    public function store(Request $request)
    {
        try{
            $purchasedata = $this->validation($request);
            $purchase = PurchaseModel::create($purchasedata);
            return response()->json([
                'success' => true,
                'message' => 'Purchase Created Successfully',
                'purchasedata' => $purchase
            ], 201);
        }catch(\Exception $e){
           return response()->json([
                'success' => false,
                'message' => 'Failed to Create Purchase',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}