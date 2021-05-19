<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
	use SoftDeletes;

    use HasFactory;
    
    protected $fillable = ['name', 'parent_id', 'slug']; //những trường đc phép insert data

    protected $table ='categories';

    public function categoryChildren(){
        
        return $this->hasMany(Category::class, 'parent_id');
    }
}
