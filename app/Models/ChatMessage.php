<?php
namespace App\Models; // this model exists into the Models folder

use App\Models\Customers; // customer se relation banane ke liye
use App\Models\User; // user se relation banane ke liye
use Illuminate\Database\Eloquent\Model;  // here class using the laravel Eloquent features

class ChatMessage extends Model
{
    public function customer()
    {
        return $this->belongsTo(
            Customers::class,
            'customer_id',
            'customer_id'
        );
    }

    public function user()
    {
        return $this->belongsTo(
            User::class,   // User model h ynha pr
            'user_id',
            'id'
        );
    }

    protected $table = 'chat_messages';
    protected $fillable = [
        'customer_id',
        'user_id',
        'sender',
        'message',
        'message_type',
        'is_read',
        'read_at'
    ];
}

?>