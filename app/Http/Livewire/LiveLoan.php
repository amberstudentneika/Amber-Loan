<?php

namespace App\Http\Livewire;

use App\Models\Document;
use App\Models\LoanInfo;
use App\Models\LoanRequest;
use Livewire\Component;

class LiveLoan extends Component
{
    public $viewMode=false, $viewCandidateInfo;
    public $loanCandidate;
    public $size,  $doc;

    public function back(){
        $this->viewCandidateInfo=false;
        $this->viewMode=false;
    }
    public function viewProfile($id){
        $this->viewMode=true;
        $this->viewCandidateInfo=true;

        $this->doc=Document::where('loanReqID',$id)->with('loanRequest')->get();


//        dd($this->proPic);

    }
//    public function loan
    public function render()
    {
         $candidates=LoanRequest::where('status',"Approved")->get();
//         $loanInfo=LoanInfo::with('loanRequest')->find($this->loanCandidate);
         $loanInfos=LoanInfo::with('loanRequest')->where('loanReqID',$this->loanCandidate)->get();
//         dd($this->loanCandidate);
         $this->size=LoanInfo::with('loanRequest')->count();

//        dd($candidates);
        return view('livewire.live-loan',compact('candidates','loanInfos'));
    }
}
