<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoanInfo extends Model
{
    use HasFactory;

    protected $fillable=[
        'loanReqID',
        'repayPeriod',
        'intRate',
        'loanAmt',
        'monthPay',
        'totalRepAmt'
    ];

    public function loanRequest(){
        return $this->belongsTo(LoanRequest::class,'loanReqID');
    }
}
