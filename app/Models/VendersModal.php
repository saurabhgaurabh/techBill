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
        'company_name',
        'mobile',
        'email',
        'gstin',
        'address_line1',
        'pan',
        'notes',
    ];
}