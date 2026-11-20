<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'items';
    protected $primaryKey = 'item_id';
    public $timestamps = true;

    protected $fillable = [
        'item_name',
        'description',
        'unit',
        'item_type',
        'category',
        'hsn_code',
        'gst_percent',
        'new_mrp',
        'old_mrp',
        'purchase_price',
        'sale_price',
        'max_stock',
        'min_stock',
        'opening_balance',
        'closing_balance',
        'status'
    ];
}