<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PurchaseModel extends Model
{
    protected $table = 'purchases';
    protected $primaryKey = 'purchase_id';
    public $timestamps = true;

    protected $fillable = [
        'vendor_id',
        'bill_no',
        'purchase_date',
        'subtotal',
        'grand_total',
        'payment_status'
    ];
}