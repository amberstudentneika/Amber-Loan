<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoanRequestController extends Controller
{
    public function loanRequest(){
        return view('liveLoanRequest');
    }

    public function viewLoanRequest(){
        return view('liveViewLoanRequest');
    }


}
