<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bill_details extends Model
{
    use HasFactory;
    protected $fillable =[
        "id","id_bill","id_product","quantity",
    ];


}
