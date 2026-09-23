<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    protected $table = 'customers';
    protected $primaryKey = 'customer_id';
    protected $keyType = 'int';
    public $incrementing = true;

    protected $fillable = [
        'name',
        'mobile',
        'email',
    ];
}