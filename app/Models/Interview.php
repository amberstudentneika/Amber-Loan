<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Interview extends Model
{
    use HasFactory;

    protected $fillable=[
        'loanReqID',
        'date',
        'time',
        'status',
        'scheduledBy',
        'interviewedBy'
    ];

    public function loanRequest(){
        return $this->belongsTo(LoanRequest::class,'loanReqID');
    }
}
