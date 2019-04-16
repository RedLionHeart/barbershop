<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'name', 'value', 'phone', 'client_email','cash', 'comment', 'status'
    ];
}
