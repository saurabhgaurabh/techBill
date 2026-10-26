<div class="page-body">
    <div class="container-xl">
        <div class="row mb-3">
            <div class="col-md-6">
                <label class="form-label">
                    Select Customer
                </label>
                <select class="form-select"
                wire:change="selectCustomer($event.target.value)">
                    @foreach($customers as $customer)
                    <option value="{{ $customer->customer_id }}"
                    @selected($customer_id == $customer->customer_id)>
                        {{ $customer->name }}
                    </option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-6">
                <label class="form-label">
                    Select Vendor
                </label>
                <select class="form-select" wire:change="selectVendor($event.target.value)">
                    @foreach($vendors as $vendor)
                    <option value="{{ $vendor->vendor_id }}"
                    @selected($vendor_id == $vendor->vendor_id)>
                        {{ $vendor->name }}
                    </option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row g-3">
            <div class="col-md-6">
                <div class="card rounded-4">
                    <div class="card-header">
                        <h3 class="card-title">
                            Customer Chat
                        </h3>
                    </div>
                    <div class="card-body"
                         style="height:400px; overflow-y:auto;">
                        @foreach($messages as $message)
                            @if($message->sender == 'vendor')
                                <div class="d-flex justify-content-end mb-3">
                                    <div class="bg-primary text-white p-2 rounded">
                                        {{ $message->message }}
                                    </div>
                                </div>
                            @else
                                <div class="d-flex justify-content-start mb-3">
                                    <div class="text-light bg-cyan p-2 rounded">
                                        {{ $message->message }}
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <div class="card-footer">
                        <div class="input-group">
                            <input 
                                type="text"
                                class="form-control rounded-4"
                                placeholder="Vendor message..."
                                wire:model.live="vendorMessage"
                                wire:keydown.enter="sendVendorMessage"
                            >
                            <button 
                                class="btn btn-primary rounded-4"
                                wire:click="sendVendorMessage">
                                Send
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card rounded-4">
                    <div class="card-header">
                        <h3 class="card-title">
                            Vendor Chat
                        </h3>
                    </div>
                    <div class="card-body"
                         style="height:400px; overflow-y:auto;">
                        @foreach($messages as $message)
                            @if($message->sender == 'customer')
                                <div class="d-flex justify-content-start mb-3">
                                    <div class="bg-success text-white p-2 rounded">
                                        {{ $message->message }}
                                    </div>
                                </div>
                            @else
                                <div class="d-flex justify-content-end mb-3">
                                    <div class="text-light bg-cyan p-2 rounded">
                                        {{ $message->message }}
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <div class="card-footer">
                        <div class="input-group">
                            <input
                                type="text"
                                class="form-control rounded-4"
                                placeholder="Customer message..."
                                wire:model.live="customerMessage"
                                wire:keydown.enter="sendCustomerMessage"
                            >
                            <button
                                class="btn btn-success rounded-4"
                                wire:click="sendCustomerMessage">
                                Send
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>