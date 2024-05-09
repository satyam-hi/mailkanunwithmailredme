<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClintPashiDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'date',
        'clintid',
        'clintname',
        'caseno',
        'paymentprice',
        'paymentstatus',
        'casetitle',
        'casetype',
        'courtname',
        'writenote',
        'procedure',
        'previsdate',
        'nextdate'
        
    ];
}
