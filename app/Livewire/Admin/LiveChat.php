<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Customers; // customer find krne ke liye
use App\Models\ChatMessage; // chat messages find/add krne ke liye

class LiveChat extends Component
{
    public $customers = []; // to get all customers
    public $selectedCustomer = null; // only selected customers
    public $messages = [];  // customer ki chat messages find krna
    public $newMessage = ''; // new messages/chat krne ke liye or input box se value send krega

    public function mount()
    {
        $this->customers = Customers::all();
    }

     public function render() // render to return the view
        {
         return view('livewire.admin.live-chat');
        }

    public function selectCustomer($id) // particuler customer ko select krne ka function 
    {
        $this->selectedCustomer = Customers::find($id); // to find customers data from db
        $this->messages = ChatMessage::where(  // to find via id
            'customer_id',
             $id
            )->orderBy('created_at', 'asc')->get(); // to get the old chat/data/messages first
    }


    public function sendMessage()
    {
        // if($this->newMessage){ // if input is empty then don't save
        //     return;
        // }
        // ChatMessage::create([ // this will insert the new row in db
        //     'customer_id' => $this->selectedCustomer->customer_id, // to select the customer
        //     'user_id' => $this->auth->id(), // kon sa admin bhej ra h msg uska name aayega
        //     'sender' => 'admin', // ynha admin string esiliye liye h kyuki msg admin hi bhejega
        //     'messages' => $this->newMessage, // new message
        //     'message_type' => 'text',
        //     'is_read' => 0
        // ]);
        // $this->newMessage = '';
        // $this->messages = ChatMessage::where(
        //     'customer_id',
        //     $this->selectedCustomer->customer_id
        // )->orderBy('created_at', 'asc')->get();
        if(empty($this->newMessage))
            {
                return;
            }
        ChatMessage::create([
            'customer_id' => $this->selectedCustomer->customer_id,
            'user_id' => auth()->id() ?? 1,
            'sender' => 'admin',
            'message' => $this->newMessage,
            'message_type' => 'text',
            'is_read' => 0,
        ]);
        $this->newMessage = '';
        $this->messages = ChatMessage::where(
            'customer_id',
            $this->selectedCustomer->customer_id
            )->orderBy('created_at', 'asc')->get();
             $this->reset('newMessage'); // to reset the input
        }

    
}