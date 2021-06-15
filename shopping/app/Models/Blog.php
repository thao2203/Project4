<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = ['id','title', 'userID', 'avt', 'content', 'view', 'created_at', 'updated_at'];
}
