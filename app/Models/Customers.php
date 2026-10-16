<?php

namespace App\Models;

use App\Models\ChatMessage;
use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    public function messages()
    {
        return $this->hasMany(
            ChatMessage::class,
            'customer_id',
            'customer_id'
        );
    }

    protected $table = 'customers';
    protected $primaryKey = 'customer_id';
    protected $keyType = 'int';
    public $incrementing = true;

    protected $fillable = [
       'name',
        'mobile',
        'company_name',
        'email',
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
