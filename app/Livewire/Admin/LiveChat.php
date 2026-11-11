<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Customers; // customer find krne ke liye
use App\Models\ChatMessage; // chat messages find/add krne ke liye
use App\Models\User;
use App\Models\UserChatMessage;
use Illuminate\Support\Facades\Auth;


class LiveChat extends Component
{
    public $users = []; // to get all users
    public $selectedUser = null; // only selected users 
    public $messages = [];  // customer ki chat messages find krna
    public $newMessage = ''; // new messages/chat krne ke liye or input box se value send krega

    public function mount()
    {
        $this->users = User::where('id','!=',auth()->id())->get();
        //  dd([
        //     'auth_id'=>auth()->id(),
        //     'user'=>auth()->user(),
        //     'session'=>session()->all()
        // ]);
    }

    public function render()
    {
        return view('livewire.admin.live-chat')
            ->layout('admin.layouts.app');
    }

    public function selectUser($id)
    {
        $this->selectedUser = User::find($id);
        if($this->selectedUser){
            $this->loadMessages();
        }
    }

    public function loadMessages()
    {
        if(!$this->selectedUser)
        {
            return;
        }
        $this->messages = UserChatMessage::where(function($query){
            $query->where('sender_id',auth()->id())
            ->where('receiver_id',$this->selectedUser->id);

        })
        ->orWhere(function($query){
            $query->where('sender_id',$this->selectedUser->id)
            ->where('receiver_id',auth()->id());
        })
        ->orderBy('created_at','asc')
        ->get();
    }


    public function sendMessage()
    {
        if(empty($this->newMessage) || !$this->selectedUser)
        {
            return;
        }
        UserChatMessage::create([
            'user_id'     => auth()->id(),
            'sender_id'=>auth()->id(),
            'receiver_id'=>$this->selectedUser->id,
            'message'=>$this->newMessage,
            'is_read'=>0,
        ]);
        $this->newMessage='';
        $this->loadMessages();
        // dd(auth()->id());
    }

    
}