<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;

    protected $fillable=[
        'loanReqID',
        'poi',
        'poa',
        'trnImg',
        'identification',
        'photo',
        'valid',
        'checkedBy'
    ];

    public function loanRequest(){
       return $this->belongsTo(LoanRequest::class,'loanReqID');
    }
}
