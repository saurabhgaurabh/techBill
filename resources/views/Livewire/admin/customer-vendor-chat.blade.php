<div class="page-body">
    <div class="container-xl">
        <div class="row mb-3">
            <div class="col-md-3">
                <label class="form-label">
                    Select Customer
                </label>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr class="table-primary">
                                <td>Id</td>
                                <td>Customers Name</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($customers as $customer)
                            <tr wire:click="selectCustomer({{$customer->customer_id}})" style="curson:pointer">
                                <td>{{$customer->customer_id}}</td>
                                <td> {{$customer->name}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-3">
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
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr class="table-primary">
                                <td>Id</td>
                                <td>Vendors Name</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($vendors as $vendor)
                                <tr wire:click="selectVendor({{$vendor->vendor_id}})" style="cursor: pointer">
                                    <td>{{$vendor->vendor_id}}</td>
                                    <td>{{$vendor->name}}</td>
                                </tr>
                            @endforeach 
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-3">
                   <div class="card">
                        <div class="card-header">
                            <h4>Selected Customer</h4>
                        </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Customer Id</th>
                                    <th>Customer Name</th>
                                </tr>
                            </thead>
                            <tbody >
                                @if($selectedCustomer)
                                    <tr class="table-primary">
                                        <td>{{ $selectedCustomer->customer_id }}</td>
                                        <td>{{ $selectedCustomer->name }}</td>
                                    </tr>
                                @else
                                    <tr>
                                        <td class="text-muted">No Customer Selected</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                   <div class="card">
                        <div class="card-header">
                            <h4>Selected Vendor</h4>
                        </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Vendor Id</th>
                                    <th>Vendor Name</th>
                                </tr>
                            </thead>
                            <tbody >
                                @if($selectedVendor)
                                    <tr class="table-primary">
                                        <td>{{ $selectedVendor->vendor_id }}</td>
                                        <td>{{ $selectedVendor->name }}</td>
                                    </tr>
                                @else
                                    <tr>
                                        <td class="text-muted">No Customer Selected</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row g-3">
            <div class="col-md-6">
                <div class="card rounded-4">
                    <div class="card-header">
                        <h3 class="card-title">
                          @if($selectedCustomer)
                          {{$selectedCustomer->name}}
                          @else
                          Customer chat
                          @endif
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
                           @if($selectedVendor)
                           {{$selectedVendor->name}}
                           @else
                           Vendor Chat
                           @endif
                        </h3>
                    </div>
                    <div class="card-body"
                         style="height:400px; overflow-y:auto;">
                        @foreach($messages as $message)
                            @if($message->sender == 'customer')
                                <div class="d-flex justify-content-end mb-3">
                                    <div class="bg-success text-white p-2 rounded">
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