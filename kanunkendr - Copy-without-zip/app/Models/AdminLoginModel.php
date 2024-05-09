<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminLoginModel extends Model
{
    use HasFactory;
    protected $table = 'adminlogin';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'email ',
        'password ',
     ];

}
