<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product_data extends Model
{
    public $table="product_data";
    protected $fillable = ['pm_category', 'ps_category', 'main_price', 'percentage', 'dis_price'];
    public $timestamps=false;
    use HasFactory;
}
