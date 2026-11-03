<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserChatMessage extends Model
{
    protected $table = 'user_chat_messages';

    protected $fillable = [
        'user_id',
        'sender_id',
        'receiver_id',
        'message',
        'is_read',
        'read_at'
    ];
}