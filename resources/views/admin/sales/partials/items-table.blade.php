<div class="card shadow-sm border-0 rounded-4 mb-4">
    <div class="card-header bg-white border-0 py-3 d-flex justify-content-between align-items-center">
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
                <thead>
                    <tr class="text-muted">
                        <th width="18%">Item</th>
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
                            <input 
                            type="text"
                            class="form-control rounded-3"
                            placeholder="Item Name">
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
                            value="1">
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
                            type="number"
                            class="form-control rounded-3"
                            placeholder="Rate">
                        </td>
                        <td>
                            <input 
                            type="number"
                            class="form-control rounded-3"
                            placeholder="%">
                        </td>
                        <td>
                            <input 
                            type="number"
                            class="form-control rounded-3"
                            readonly
                            value="0">
                        </td>
                        <td><button class="btn btn-sm btn-danger rounded-3"><i class="bi bi-trash"></i></button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>