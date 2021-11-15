<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InterviewScheduleController extends Controller
{
    public function viewInterviewSchedule(){
        return view('liveInterviewSchedule');
}

}
