<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable=[
        'date',
        'amount',
        'amountNum',
        'reason',
        'month',
        'nameOfPayee'
    ];
}
