<?php

namespace App\Http\Controllers;

use App\Models\Interview;
use App\Models\LoanRequest;
use Illuminate\Http\Request;
use Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $name=Auth::user()->fName." ".Auth::user()->lName;
        $loanReq= LoanRequest::where('status',"Undecided")->where('loanOfficer',"Unassigned")->count();
        $appLoan= LoanRequest::where('status',"Approved")->where('loanOfficer',$name)->count();
        $denLoan= LoanRequest::where('status',"Denied")->where('loanOfficer',$name)->count();
        $totalRev=$appLoan+$denLoan;
        $totalScheduled= Interview::where('status',"Scheduled")->where('scheduledBy',$name)->count();
        $totalInterviewed= Interview::where('status',"Interviewed")->where('interviewedBy',$name)->count();
//dd($totalInterviewed);
        return view('home',compact('appLoan','totalScheduled','totalInterviewed','denLoan','loanReq','totalRev'));
    }

}
