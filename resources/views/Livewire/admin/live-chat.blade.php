<div class="page-body">
    <div class="container-xl">
        <div class="row">
            <div class="col-md-4">
                <div class="card rounded-4">
                    <div class="card-header">
                        <h3>User List</h3>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr class="table-primary">
                                    <th>Id</th>
                                    <th>Name</th>
                                </tr>
                            </thead>
                        </table>
                        @foreach($users as $user)
                        <div wire:click="selectUser({{ $user->id }})" class="border rounded p-2 mb-2" style="cursor:pointer">
                            <strong>{{ $user->id }}</strong> - {{ $user->name }}
                            @if($selectedUser && $selectedUser->id == $user->id)
                                <span class="badge bg-success float-end">Selected</span>
                            @endif
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- CHAT AREA -->
            <div class="col-md-8">
                <div class="card rounded-4">
                    <div class="card-header">
                        @if($selectedUser)
                            Chat with:
                            <strong>
                                {{ $selectedUser->name }}
                            </strong>
                        @else
                            Select User
                        @endif
                    </div>
                    <div class="chat-container card-body" 
                    wire:poll.350ms="loadMessages"
                         style="height:400px;overflow-y:auto;">
                        @if($selectedUser)
                            @foreach($messages as $message)
                                @if($message->sender_id == auth()->id())
                                    <div class="d-flex justify-content-end mb-3">
                                        <div class="bg-primary text-white p-2 rounded">
                                            {{ $message->message }}
                                        </div>
                                    </div>
                                @else
                                    <!-- OTHER USER MESSAGE -->
                                    <div class="d-flex justify-content-start mb-3">
                                        <div class="bg-cyan text-light p-2 rounded">
                                            {{ $message->message }}
                                        </div> 
                                    </div>
                                @endif
                            @endforeach
                        @else
                            <div class="text-center text-muted">
                                Select User to start chat
                            </div>
                        @endif
                    </div>
                    @if($selectedUser)
                    <div class="card-footer">
                        <div class="input-group">
                            <input
                                id="messageInput"
                                type="text"
                                class="form-control rounded-4"
                                placeholder="Type message..."
                                wire:model.live="newMessage"
                                wire:keydown.enter.prevent="sendMessage">
                            <button
                                class="btn btn-primary rounded-4"
                                wire:click="sendMessage"
                                @disabled(empty($newMessage)) 
                                >
                                Send
                            </button>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
{{-- @disabled(empty($newMessage))  to desable the send button --}}
{{-- wire:keydown.enter="sendMessage" to send msg using Enter Key --}}
{{-- wire:model.live="newMessage"     to send the messages --}}
{{-- wire:poll.1000ms=loadMessages  to refresh messages every 1 second mtlb msg load ni krne pdenge --}}
@script
<script>
        document.addEventListener("livewire:load", () => {
            const chatBox = document.getElementById('chat-container');
            
            function scrollToBottom() {
                if (chatBox) {
                    chatBox.scrollTop = chatBox.scrollHeight;
                }
            }

            scrollToBottom();

            Livewire.hook('message.processed', (message, component) => {
                scrollToBottom();
            });
        });
    </script>
    @endscript