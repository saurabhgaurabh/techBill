<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\ChatMessage;



class VendersModal extends Model
{
    public function ChatMessages()
    {
        return $this->hasMany(ChatMessage::class, 'vendor_id', 'vendor_id');
    }
    
    protected $table = 'vendors';
    protected $primaryKey = 'vendor_id';
    protected $keyType = 'int';
    public $incrementing = true;

    protected $fillable = [
        'sender_vendor_id',
        'reciever_vendor_id',
        'name',
        'mobile',
        'company_name',
        'email',
        'password',
        'gstin',
        'pan',
        'address_line1',
        'address_line2',
        'city',
        'state',
        'pincode',
        'notes',
    ];
}