<?php

namespace App\Http\Livewire;

use App\Models\Document;
use App\Models\Interview;
use App\Models\LoanRequest;
use Livewire\Component;
use Mail;
use App\Mail\interviewRequest;
use Auth;
class LiveViewLoanRequest extends Component
{
    public $trnImg, $income, $address, $identity, $image,$loanRID;
    public $viewDocument;
    public $viewLoanRequest=false, $viewLoanRequestDocs, $scheduleInterview;
    public $ID, $date, $time;

    public function back(){
        $this->scheduleInterview=false;
        $this->viewLoanRequestDocs=true;
    }
    public function viewLoanRequest(){
        $this->viewLoanRequest=true;
    }
    public function viewLoanRequestDocs(){
        $this->viewLoanRequestDocs=true;
    }
    public function createInterview($id){
        $this->ID= $id;
        $this->viewLoanRequestDocs=false;
        $this->viewLoanRequestDocs=false;
        $this->scheduleInterview=true;
    }

    public function viewDocument($id){
        $this->viewLoanRequest=true;
        $this->viewLoanRequestDocs=true;
    $documents=Document::where('loanReqID',$id)->get();
//    dd($id);
    foreach($documents as $document){
        $this->loanRID=$document->loanReqID;
        $this->income=$document->poi;
        $this->address= $document->poa;
        $this->trnImg= $document->trnImg;
        $this->identity= $document->identification;
        $this->image= $document->photo;
    }
    }

    public function scheduledInterview(){
        $this->validate([
           'date'=> 'required',
           'time'=> 'required'
        ]);

        $id=$this->ID;
        Interview::create([
            'loanReqID' => $id,
            'date'      =>$this->date,
            'time'      =>$this->time,
            'status'    =>"scheduled",
            'scheduledBy' => Auth::user()->fName." ".Auth::user()->lName,
            'interviewedBy' => "unassigned"
        ]);

        $loanReq = LoanRequest::find($id);
        $firstname=$loanReq->fName;
        $lastname=$loanReq->lName;
        $mail=$loanReq->email;
        $loanOfficer=Auth::user()->fName." ".Auth::user()->lName;

        LoanRequest::find($id)->update([
            'loanOfficer'   => $loanOfficer
        ]);
        $emailContent=[
            'name'  => $firstname." ".$lastname
        ];
        Mail::to($mail)->send(new interviewRequest($emailContent));

        return redirect()->route('viewLoanRequest');

    }

//    public function requestInterview($id){
//        $loanReq = LoanRequest::find($id);
//        $firstname=$loanReq->fName;
//        $lastname=$loanReq->lName;
//        $mail=$loanReq->email;
//        $loanOfficer=Auth::user()->fName." ".Auth::user()->lName;
//
//        LoanRequest::find($id)->update([
//            'loanOfficer'   => $loanOfficer
//        ]);
//        $emailContent=[
//          'name'  => $firstname." ".$lastname
//        ];
//        Mail::to($mail)->send(new interviewRequest($emailContent));
//
//        return redirect('/home');
//    }

    public function render()
    {
        $loanRequests=LoanRequest::where('loanOfficer','unassigned')->get();
//        dd($loanRequests);
        return view('livewire.live-view-loan-request',compact('loanRequests'));
    }
}
