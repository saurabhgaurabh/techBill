<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Customers;

class SalesModel extends Model
{
    protected $table = 'sales';
    protected $primaryKey = 'sale_id';
    public $timestamps = true;

    protected $fillable = [
        'invoice_no',
        'series_type',
        'item_name',
        'customer_id',
        'invoice_date',
        'due_date',
        'place_of_supply',
        'supply_type',
        'payment_mode',
        'payment_status',
        'subtotal',
        'discount_amount',
        'taxable_amount',
        'cgst_amount',
        'sgst_amount',
        'igst_amount',
        'cess_amount',
        'qty',
        'rate',
        'gst_rate',
        'amount',
        'round_off',
        'grand_total',
        'remarks',
        'status'
    ];
    
    public function customer() // customers ka name call krane ke liye sales table me
    {
        return $this->belongsTo(Customers::class, 'customer_id', 'customer_id');
    }
    // public function getItem()
    // {
    //     return $this->belongsTo(Items::class, 'item_id', 'item_id');
    // }
}