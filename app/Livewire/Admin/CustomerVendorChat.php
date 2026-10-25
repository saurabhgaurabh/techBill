<?php

namespace App\Livewire\Admin;

use Livewire\Component;

use App\Models\Customers;
use App\Models\VendersModal;
use App\Models\ChatMessage;


class CustomerVendorChat extends Component
{

    public $customers = [];
    public $vendors = [];
    public $customer_id = 1;
    public $vendor_id = 2;
    public $messages = [];
    public $vendorMessage = '';
    public $customerMessage = '';

    public function mount()
    {
        $this->customers = Customers::all();
        $this->vendors = VendersModal::all();
        $this->loadMessages();
    }

    public function selectCustomer($id)
    {
        $this->customer_id = $id;
        $this->loadMessages();
    }

    public function selectVendor($id)
    {
        $this->vendor_id = $id;
        $this->loadMessages();
    }

    public function loadMessages()
    {
        $this->messages = ChatMessage::where('customer_id',$this->customer_id)
            ->where('vendor_id',$this->vendor_id)
            ->orderBy('created_at','asc')
            ->get();
    }

    public function sendVendorMessage()
    {
        if(empty($this->vendorMessage))
        {
            return;
        }

        ChatMessage::create([
            'customer_id'=>$this->customer_id,
            'vendor_id'=>$this->vendor_id,
            'user_id'=>1,
            'sender'=>'vendor',
            'message'=>$this->vendorMessage,
            'message_type'=>'text',
            'is_read'=>0,
        ]);
        $this->vendorMessage='';
        $this->loadMessages();
    }

    public function sendCustomerMessage()
    {
        if(empty($this->customerMessage))
        {
            return;
        }
        ChatMessage::create([
            'customer_id'=>$this->customer_id,
            'vendor_id'=>$this->vendor_id,
            'user_id'=>1,
            'sender'=>'customer',
            'message'=>$this->customerMessage,
            'message_type'=>'text',
            'is_read'=>0,
        ]);
        $this->customerMessage='';
        $this->loadMessages();
    }

    public function render()
    {
        return view('livewire.admin.customer-vendor-chat')
        ->layout('admin.layouts.app');
    }

}