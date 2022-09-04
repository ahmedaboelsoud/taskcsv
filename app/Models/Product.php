<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Product extends Model 
{
    protected $fillable = [
        'product_name',
        'articel_group_Id',
        'part_number',
        'prize'
    ];

}//end of model
