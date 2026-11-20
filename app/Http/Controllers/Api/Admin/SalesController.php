<?php
namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SalesModel;

class SalesController extends Controller
{
    private function validation(Request $request)
    {
        return $request->validate([
            'invoice_no' => 'required|string|max:50',
            'series_id' => 'required|numeric',
            'customer_id' => 'required|numeric',
            'invoice_date' => 'required|date',
            'due_date' => 'nullable|date',
            'place_of_supply' => 'nullable|string|max:100',
            'supply_type' => 'nullable|string|max:100',
            'payment_mode' => 'nullable|string|max:50',
            'payment_status' => 'required|string|max:50',
            'subtotal' => 'required|numeric',
            'discount_amount' => 'nullable|numeric',
            'taxable_amount' => 'required|numeric',
            'cgst_amount' => 'nullable|numeric',
            'sgst_amount' => 'nullable|numeric',
            'igst_amount' => 'nullable|numeric',
            'cess_amount' => 'nullable|numeric',
            'round_off' => 'nullable|numeric',
            'grand_total' => 'required|numeric',
            'remarks' => 'nullable|string|max:500',
            'status' => 'nullable|boolean'
        ]);
    }


    public function index()
    {
     return view('admin.sales.index');
    }

     public function store(Request $request)
    {
        try {
            $salesData = $this->validation($request);
            $sales = SalesModel::create($salesData);
            return response()->json([
                'success' => true,
                'message' => 'Sales Created Successfully',
                'salesdata' => $sales
            ], 201);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to create sales',
                'error' => $e->getMessage()
            ], 500);
        }        
   } 
}

?> 