<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class book_meal extends Model
{
    use HasFactory;
    protected $table = 'book_meal';
    protected $fillable = [
        'id',
        'name',
        'email',
        'mobile',
        'landmark',
        'dish_name',
        'quantity',
        'address',
    ];
}
