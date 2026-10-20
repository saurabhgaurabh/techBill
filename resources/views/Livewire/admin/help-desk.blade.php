<div class="page-body">
    <div class="container-xl">
        <div class="row">
            <div class="col-md-4">
                <div class="card rounded-4">
                    <div class="card-header">
                        <h4>Suppliers List</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-vcenter">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Supplier</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($vendors as $vendor)
                                    <tr wire:click="selectVendor({{$vendor-> vendor_id}})" style="cursor: pointer"> 
                                        <td>
                                            {{ $vendor->vendor_id }}
                                        </td>
                                        <td>
                                            {{ $vendor->name }}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                {{-- @if($selectedVendor)
                <div class="card mt-3 rounded-4">
                    <div class="card-header">
                    Chat: 
                    </div>
                    <div class="card-body"   style="height:400px; overflow-y:auto;">
                        @foreach($messages as $message)
                            <div class="mb-2">
                                <strong>{{ $message->sender }}</strong>  : {{ $message->message }}
                            </div>
                        @endforeach
                    </div>
                </div>
                @endif --}}
                <div class="card">
                    <div class="card-header">
                        @if($selectedVendor)
                            Chat
                        @else
                            Select Vendor
                        @endif
                    </div>
                    <div class="card-body" style="height:400px; overflow-y:auto;">
                        @if($selectedVendor)
                        @foreach($messages as $message)
                        <div class="mb-3">
                            @if($message->sender == 'admin')
                                <div class="text-end">
                                    <span class="badge bg-primary">
                                        {{ $message->message }}
                                    </span>
                                </div>
                            @else
                                <div>
                                    <span class="badge bg-secondary">
                                        {{ $message->message }}
                                    </span>
                                </div>
                            @endif
                        </div>
                        @endforeach
                        @else
                        <p>Select vendor to start chat</p>
                        @endif
                    </div>
                   @if($selectedVendor)
                    <div class="card-footer border-top">
                        <div class="d-flex gap-2">
                            <input 
                            type = "text"
                            class="form-control"
                            placeholder="Enter Messages..."
                            wire:model="newMessage",
                            wire:keydown.enter="sendMessage"
                            />
                            <button class="btn btn-primary" wire:click="sendMessage">Send</button>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>




{{-- <tr wire:click="selectedVendor({{$vendor-> vendor_id}})" style="cursor: pointer"> // ynhapr vendor select kr rhe h --}}