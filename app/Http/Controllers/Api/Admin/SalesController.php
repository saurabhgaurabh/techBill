<?php
namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SalesModel;
use App\Models\Customers;
use App\Models\Item;

class SalesController extends Controller
{
    private function validation(Request $request)
    {
        return $request->validate([
            'invoice_no' => 'required|string|max:50',
            'series_type' => 'required|string|max:100',
            'item_name' => 'required|string|max:50',
            'customer_id' => 'required|numeric|max:50',
            'invoice_date' => 'required|date',
            'due_date' => 'nullable|date',
            'place_of_supply' => 'nullable|string|max:100',
            'supply_type' => 'nullable|string|max:100',
            'payment_mode' => 'nullable|string|max:50',
            'payment_status' => 'nullable|string|max:50',
            'subtotal' => 'nullable|numeric',
            'discount_amount' => 'nullable|numeric',
            'taxable_amount' => 'nullable|numeric',
            'cgst_amount' => 'nullable|numeric',
            'sgst_amount' => 'nullable|numeric',
            'igst_amount' => 'nullable|numeric',
            'cess_amount' => 'nullable|numeric',
            'qty' => 'required|numeric',
            'rate' => 'required|numeric',
            'gst_rate' => 'nullable|numeric',
            'amount' => 'required| numeric',
            'round_off' => 'nullable|numeric',
            'grand_total' => 'nullable|numeric',
            'remarks' => 'nullable|string|max:500',
            'status' => 'nullable|boolean'
        ]);
    }


   public function index()
    {
    $salesdata = SalesModel::with('customer')
                    // ->latest() to get the latest data
                    ->orderBy('sale_id', 'asc')  // to get the data by asc order
                    ->get();
    return view('admin.sales.index', compact('salesdata'));
    }
     public function create()
    {
        $customers = Customers::orderBy('name', 'asc')->get();
        $getItem = Item::orderBy('item_name','asc')->get();
        return view('admin.sales.create', compact('customers', 'getItem'));
    }

     public function store(Request $request)
    {
        try {
            $salesData = $this->validation($request);
            $sales = SalesModel::create($salesData);
            // return response()->json([
            //     'success' => true,
            //     'message' => 'Sales Created Successfully',
            //     'salesdata' => $sales
            // ], 201);
            return redirect('sales.index')->back()->with('Success', 'Sales Create Successfully');

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