<?php

namespace App\Livewire\Admin;

use App\Models\ChatMessage;
use Livewire\Component;
use App\Models\VendersModal; // vendersModel load/import kiya
use App\Models\ChatMessageVendor;

class HelpDesk extends Component
{
    public $vendors = [];
    public $selectedVendor  = null; // vendor ko select krne ke liye
    public $messages = []; // to recieve/display msg
    public $newMessage = ''; // to send new msg 

    public function mount() // sabse phle call hoga 
    {
    $this->vendors = VendersModal::all();
    // $this->vendors = VendersModal::orderBy('name')->get();
    // dd($this->vendors);  
    }

    public function render()
    {
    return view('livewire.admin.help-desk')->layout('admin.layouts.app');
    }

   public function selectVendor($vendorId)
    {
        $this->selectedVendor = $vendorId;

        $this->messages = ChatMessageVendor::where('vendor_id', $vendorId)
            ->orderBy('created_at','asc')
            ->get();
    }
        
    public function sendMessage()
    {
        $this->validate(['newMessage' => 'required|string|min:1|max:1000' ]);
        ChatMessageVendor::create([ // to insert 
            'vendor_id' => $this->selectedVendor,
            'user_id' => auth()->id() ?? 2,
            'sender' => 'admin',
            'message' => $this->newMessage,
            'message_type' => 'text',
            'is_read' => 0,
        ]);
     

        $this->messages = ChatMessageVendor::where('vendor_id', $this->selectedVendor)->orderBy('created_at')->get();
        $this->newMessage = ''; // to clear input
    //      dd([
    //     'vendor' => $this->selectedVendor,
    //     'message' => $this->newMessage,
    //     'user' => auth()->id(),
    // ]);
    }
 

 
}