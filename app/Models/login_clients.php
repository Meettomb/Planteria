<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class login_clients extends Model
{
    public $table="login_clients";
    public $timestamps=false;
    protected $guarded=[];
    use HasFactory;
}
