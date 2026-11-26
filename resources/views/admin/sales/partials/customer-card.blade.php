<div class="card shadow-sm border-0 rounded-4 mb-4">
    <div class="card-header bg-white border-0 py-3">
        <h4 class="mb-0 fw-bold text-dark">
            <i class="bi bi-person-circle text-warning me-2"></i>
            Customer Details
        </h4>
    </div>
    <div class="card-body">
        <div class="row">
            <!-- Customer -->
            <div class="col-md-3 mb-3">
                <label class="form-label fw-semibold">
                    Customer Name <span class="text-danger">*</span>
                </label>
                <select class="form-select rounded-3">
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
                    type="text"
                    class="form-control rounded-3"
                    placeholder="GST Number">
            </div>
            <!-- Mobile -->
            <div class="col-md-3 mb-3">
                <label class="form-label fw-semibold">
                    Mobile Number
                </label>
                <input
                    type="text"
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
                    placeholder="Email">
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