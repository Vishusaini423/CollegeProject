<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class foods extends Model
{
    use HasFactory;
    protected $fillable =[
        'category_id',
        'subcat_id',
        'cost_type',
        'name',
        'price',
        'discount_price',
    ];
}
