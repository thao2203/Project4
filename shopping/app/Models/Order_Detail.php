<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order_Detail extends Model
{
	use SoftDeletes;

    use HasFactory;
    
    protected $fillable = ['id', 'orderID', 'productID','quantity']; //những trường đc phép insert data
    protected $table ='order_details';

}