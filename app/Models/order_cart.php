<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order_cart extends Model
{
    public $table="order_carts";
    public $timestamps=true;
    use HasFactory;
}
