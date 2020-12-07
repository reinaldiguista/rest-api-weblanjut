<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\ControllerUser;

class Product extends Model
{
    protected $table = 'products';
    use HasFactory;
}
