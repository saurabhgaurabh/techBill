<form action="{{ route('sales.store') }}" method="POST">
    @csrf

    <div class="card p-2 mb-2" style="background: var(--cardbg)">
        <div class="d-flex justify-content-between align-items-center mt-2 pb-1">                
            <div class="d-flex align-items-center">
                <a href="{{ route('sales.index') }}"
                class="btn btn-icon btn-ghost-secondary me-2"
                aria-label="Back to Vendors"
                title="Back to Vendors">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-chevron-left">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M15 6l-6 6l6 6" />
                    </svg>
                </a>                
                <h2 class="fw-bold mb-1">
                    Create New Sales Invoice
                </h2>
            </div>
            <div>
                <button class="btn btn-outline-secondary">Discart</button>
                <button class="btn text-white" style="background:#eb5a25;" type="submit">Save Invoice</button>
            </div>
        </div>
    </div>

{{-- customer card start --}}
<div class="card shadow-sm border-0 rounded-4 mb-4" >
    <div class="card-header border-0 py-3" >
        <h4 class="mb-0 fw-bold text-dark">
            <i class="bi bi-person-circle text-warning me-2"></i>
            Customer Details
        </h4>
    </div>
    <div class="card-body" style="background: var(--cardbg)">
        <div class="row">
            <!-- Customer -->
            <div class="col-md-3 mb-3">
                <label class="form-label fw-semibold">
                    Customer Name <span class="text-danger">*</span>
                </label>
                <select class="form-select rounded-3" name="customer_id" required>
                    <option>Select Customer</option>
                    @foreach($customers ?? [] as $customer)
                        <option value="{{ $customer->customer_id }}">
                            {{ $customer->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <!-- GST -->
            <div class="col-md-3 mb-3">
                <label class="form-label fw-semibold">
                    GSTIN / UIN
                </label>
                <input
                    type="text" name="gst_number"
                    class="form-control rounded-3"
                    placeholder="GST Number">
            </div>
            <!-- Mobile -->
            <div class="col-md-3 mb-3">
                <label class="form-label fw-semibold">
                    Mobile Number
                </label>
                <input
                    type="text" name="mobile_number"
                    class="form-control rounded-3"
                    placeholder="Mobile">
            </div>
            <!-- Email -->
            <div class="col-md-3 mb-3">
                <label class="form-label fw-semibold">
                    Email
                </label>
                <input
                    type="email"
                    class="form-control rounded-3"
                    placeholder="abc@gmail.com">
            </div>
            <!-- City -->
            <div class="col-md-3 mb-3">
                <label class="form-label fw-semibold">
                    City
                </label>
                <input type="text" class="form-control rounded-3" placeholder="City">
            </div>
            <div class="col-md-3 mb-3">
                <label class="form-label fw-semibold"> State </label>
                <input type="text" class="form-control rounded-3" placeholder="State">
            </div>
            <!-- Address -->
            <div class="col-md-6 mb-3">
                <label class="form-label fw-semibold">Address</label>
                <textarea class="form-control rounded-3" rows="3" placeholder="Customer Address"></textarea>
            </div>
        </div>
    </div>
</div>
{{-- customer card end --}}

{{-- invoice card start --}}
<div class="card shadow-sm border-0 rounded-4 mb-4" style="background: var(--cardbg)">
    <div class="card-header border-0 py-3">
        <h4 class="mb-0 fw-bold text-dark">
            <i class="bi bi-receipt text-warning me-2"></i>
            Invoice Details
        </h4>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-3 mb-3">
                <label class="form-label fw-semibold">
                    Series Name <span class="text-danger">*</span>
                </label>
                <select class="form-select rounded-3" name="series_type" >
                    <option>Select Series</option>
                    <option>Manufacturing</option>
                    <option>GOODS</option>
                    <option>SERVICES</option>
                </select>
            </div>
            <div class="col-md-3 mb-3">
                <label class="form-label fw-semibold">
                    Invoice No
                </label>
                <input type="text" name="invoice_no" class="form-control rounded-3" placeholder="INV-000001">
            </div>
            <div class="col-md-3 mb-3">
                <label class="form-label fw-semibold">Invoice Date</label>
                <input type="date" name="invoice_date" class="form-control rounded-3">
            </div>
            <div class="col-md-3 mb-3">
                <label class="form-label fw-semibold">Due Date</label>
                <input type="date" name="due_date" class="form-control rounded-3">
            </div>
            <div class="col-md-3 mb-3">
                <label class="form-label fw-semibold"> Payment Status</label>
                <select class="form-select rounded-3" wire:model="payment_status">
                    <option>Pending</option>
                    <option>Paid</option>
                    <option>Partial</option>
                </select>
            </div>
            <div class="col-md-3 mb-3">
                <label class="form-label fw-semibold">
                    Payment Mode
                </label>
                <select class="form-select rounded-3" wire:model="payment_mode">
                    <option>Cash</option>
                    <option>UPI</option>
                    <option>Card</option>
                    <option>Bank</option>
                </select>
            </div>
        </div>
    </div>
</div>
{{-- invoice card end --}}

{{-- item card --}}
<div class="card shadow-sm border-0 rounded-4 mb-4" style="background: var(--cardbg)">
    <div class="card-header border-0 py-3 d-flex justify-content-between align-items-center" >
        <h4 class="mb-0 fw-bold">
            <i class="bi bi-box-seam text-warning me-2"></i>
            Item Details
        </h4>
        <button 
            type="button"
            class="btn btn-sm rounded-3 text-white"
            style="background:#eb5a25;">
            <i class="bi bi-plus-lg"></i>
            Add Item
        </button>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table align-middle">
                <thead >
                    <tr class="text-muted">
                        <th width="18%">Item <span class="text-danger">*</span></th>
                        <th>HSN/SAC</th>
                        <th>Qty</th>
                        <th>New MRP</th>
                        <th>Old MRP</th>
                        <th>Rate</th>
                        <th>GST %</th>
                        <th>Amount</th>
                        <th>#</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            {{-- <input 
                            type="text"
                            class="form-control rounded-3"
                            placeholder="Item Name"> --}}
                             {{-- <div class="col-md-3 mb-3"> --}}
                                <select class="form-select rounded-3" name="item_name" required>
                                    <option>Select Item</option>
                                    @foreach($getItem ?? [] as $item)
                                        <option value="{{ $item->item_id }}">
                                            {{ $item->item_name }}
                                        </option>
                                    @endforeach
                                </select>
                            {{-- </div> --}}
                        </td>
                        <td>
                            <input 
                            type="text"
                            class="form-control rounded-3"
                            placeholder="HSN">
                        </td>
                        <td>
                            <input 
                            type="number"
                            class="form-control rounded-3"
                            name="qty"
                            placeholder="Qty">
                        </td>
                        <td>
                            <input 
                            type="number"
                            class="form-control rounded-3"
                            placeholder="MRP">
                        </td>
                        <td>
                            <input 
                            type="number"
                            class="form-control rounded-3"
                            placeholder="Old MRP">
                        </td>
                        <td>
                            <input 
                            type="number" name="rate"
                            class="form-control rounded-3"
                            placeholder="Rate">
                        </td>
                        <td>
                            <input 
                            type="number" name="gst_rate"
                            class="form-control rounded-3"
                            placeholder="%">
                        </td>
                        <td>
                            <input 
                            type="number" name="amount"
                            class="form-control rounded-3"
                            
                           >
                        </td>
                        <td><button class="btn btn-sm btn-danger rounded-3"><i class="bi bi-trash"></i></button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
{{-- item card end --}}

<div class="row">   
    <div class="col-lg-8">
        <div class="invoice-section">
            <div class="section-title">
                Special Notes
            </div>
            <div class="col-md-6 mb-3">
                <textarea class="form-control" rows="4"placeholder="Enter remarks or special notes"></textarea>
            </div>
        </div>
    </div>
     <div class="col-lg-4" >
        <div class="card shadow-sm border-0 rounded-4 sticky-top" style="top:20px; background: var(--cardbg)">
            <div class="card-header border-0 py-3" style="background: var(--border-darkblue)" >
                <h4 class="mb-0 fw-bold text-dark" >
                    <i class="bi bi-calculator text-warning me-2"></i>
                    Invoice Summary
                </h4>
            </div>
            <div class="card-body">
                <div class="d-flex justify-content-between mb-3">
                    <span class="text-muted">
                        Sub Total
                    </span>
                    <strong>
                        ₹ 0.00
                    </strong>
                </div>
                <div class="d-flex justify-content-between mb-3">
                    <span class="text-muted">
                        Discount
                    </span>
                    <strong>
                        ₹ 0.00
                    </strong>
                </div>
                <div class="d-flex justify-content-between mb-3">
                    <span class="text-muted">
                        Taxable Amount
                    </span>
                    <strong>
                        ₹ 0.00
                    </strong>
                </div>
                <hr>
                <div class="d-flex justify-content-between mb-2">
                    <span>
                        CGST
                    </span>
                    <span>
                        ₹ 0.00
                    </span>
                </div>
                <div class="d-flex justify-content-between mb-2">
                    <span>SGST</span>
                    <span> ₹ 0.00</span>
                </div>
                <div class="d-flex justify-content-between mb-2">
                    <span>
                        IGST
                    </span>
                    <span>
                        ₹ 0.00
                    </span>
                </div>
                <div class="d-flex justify-content-between mb-2">
                    <span>
                        CESS
                    </span>
                    <span>
                        ₹ 0.00
                    </span>
                </div>
                <hr>
                <div class="p-3 rounded-4" style=" background:#fff7ed; border:1px solid #fed7aa;    ">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="mb-0 fw-bold"> Grand Total </h5>
                        <h3 class="mb-0 fw-bold"
                            style="color:#eb5a25;">
                            ₹ 0.00
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</form>