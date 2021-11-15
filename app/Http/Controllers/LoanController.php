<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoanController extends Controller
{
    public function view(){
        return view('liveLoan');
    }

    public function loanRequirement(){
return view('loanRequirement');
    }
    public function contactUs(){
return view('contactUs');
    }
}
