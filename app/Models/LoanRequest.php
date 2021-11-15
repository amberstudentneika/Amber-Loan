<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoanRequest extends Model
{
    use HasFactory;

    protected $fillable=[
        'trn',
        'fName',
        'lName',
        'gender',
        'homeAddress',
        'email',
        'phoneNum',
        'amount',
        'status',
        'comments',
        'loanOfficer'
    ];

    public function documents(){
        return $this->hasMany(Document::class,'loanReqID');
    }

    public function interviews(){
        return $this->hasMany(Interview::class,'loanReqID');
    }

    public function loanInfos(){
        return $this->hasMany(LoanInfo::class,'loanReqID');
    }
}
