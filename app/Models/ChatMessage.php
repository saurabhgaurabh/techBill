<?php
namespace App\Models; // this model exists into the Models folder

use App\Models\Customers; // customer se relation banane ke liye
use App\Models\User; // user se relation banane ke liye
use Illuminate\Database\Eloquent\Model;  // here class using the laravel Eloquent features
// use App\Models\VendersModal;

class ChatMessage extends Model
{
     protected $table = 'chat_messages'; // chat_messages is the table name or ye bhi define krta h ki model kis table se connect h

    protected $fillable = [ // jab chat message send krenge  or fillable batata h ki kon kon se column create ke dwara save honge
        'customer_id',
        'user_id',
        'sender',
        'message',
        'message_type',
        'is_read',
        'read_at'
    ];
    
    public function customer()
    {
        return $this->belongsTo(
            Customers::class,
            'customer_id',
            'customer_id'
        );
    }

    // public function vendor()
    // {
    //     return $this->belongsTo(VendersModal::class, 'vendor_id', 'vendor_id');
    // }
    public function user()
    {
        return $this->belongsTo(
            User::class,   // User model h ynha pr
            'user_id',
            'id'
        );
    }

   
}

?>