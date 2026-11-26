<div class="card shadow-sm border-0 rounded-4 mb-4">
    <div class="card-header bg-white border-0 py-3">
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
                <select class="form-select rounded-3">
                    <option>Select Series</option>
                    <option>Retail</option>
                    <option>Wholesale</option>
                </select>
            </div>
            <div class="col-md-3 mb-3">
                <label class="form-label fw-semibold">
                    Invoice No
                </label>
                <input type="text" class="form-control rounded-3" placeholder="INV-000001">
            </div>
            <div class="col-md-3 mb-3">
                <label class="form-label fw-semibold">Invoice Date</label>
                <input type="date" class="form-control rounded-3">
            </div>
            <div class="col-md-3 mb-3">
                <label class="form-label fw-semibold">Due Date</label>
                <input type="date" class="form-control rounded-3">
            </div>
            <div class="col-md-3 mb-3">
                <label class="form-label fw-semibold"> Payment Status</label>
                <select class="form-select rounded-3">
                    <option>Pending</option>
                    <option>Paid</option>
                    <option>Partial</option>
                </select>
            </div>
            <div class="col-md-3 mb-3">
                <label class="form-label fw-semibold">
                    Payment Mode
                </label>
                <select class="form-select rounded-3">
                    <option>Cash</option>
                    <option>UPI</option>
                    <option>Card</option>
                    <option>Bank</option>
                </select>
            </div>
        </div>
    </div>
</div>