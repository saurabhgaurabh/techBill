<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VendersModal extends Model
{
    protected $table = 'vendors';
    protected $primaryKey = 'vendor_id';
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