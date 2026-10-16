<div class="page-body">
    <div class="container-xl">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                            <h3>Customer List</h3>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr class="table-primary">
                                    <td>Id</td>
                                    <td>Name</td>
                                </tr>
                            </thead>
                        </table>
                    @foreach($customers as $customer)
                    <div wire:click="selectCustomer({{ $customer->customer_id }})" style="cursor:pointer" py-3>
                        {{ $customer->customer_id }}
                        {{ $customer->name }}
                    </div>
                    @endforeach
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        @if($selectedCustomer)
                            {{ $selectedCustomer->name }}
                        @else
                            Select Customer
                        @endif
                    </div>
                    <div class="card-body" style="height: 400px; overflow-y:auto;">
                        @if($selectedCustomer)
                            @foreach($messages as $message)
                            @if($message->sender == 'admin')
                            <div class="d-flex justify-content-end mb-3">
                                <div class="bg-primary text-white p-2 rounded">
                                    {{ $message->message }}
                                </div>
                            </div>
                            @else
                                <div class="d-flex justify-content-start mb-3">
                                    <div class="bg-light p-2 rounded">
                                         {{ $message->message }}
                                    </div>
                                </div>
                                @endif
                            @endforeach
                        @else
                        <div class="text-center text-muted">
                            Select Customer
                        </div>
                         @endif
                    </div>
                </div>
                @if($selectedCustomer)
                <div class="card-footer">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Type message..." wire:model.live="newMessage" wire:key="message-input">
                        <button class="btn btn-primary" wire:click="sendMessage">Send</button>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>