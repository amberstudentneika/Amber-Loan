<?php

namespace App\Http\Livewire;

use App\Models\Document;
use App\Models\LoanInfo;
use App\Models\LoanRequest;
use Livewire\Component;
use App\Models\Interview;
use Auth;
class LiveInterviewSchedule extends Component
{
    public $loanRID, $income, $address, $trnImg, $identity, $image;
    public $docValidation, $validDocs;
    public $loanAmt, $reqID, $lID, $totalPay, $intRate, $repayPeriod, $fee;
    public $comment;
    public $viewSchedule=false, $viewDoc,$successMsg;


    public function clearField(){
        $this->totalPay = "";
        $this->intRate = "";
        $this->repayPeriod ="";
        $this->loanAmt = "";
    }
    public function viewDocument($id)
    {
        $this->viewSchedule = true;
        $this->viewDoc = true;

        $documents = Document::where('loanReqID', $id)->get();
        $this->reqID = $id;
        foreach ($documents as $document) {
            $this->loanRID = $document->loanReqID;
            $this->income = $document->poi;
            $this->address = $document->poa;
            $this->trnImg = $document->trnImg;
            $this->identity = $document->identification;
            $this->image = $document->photo;
        }
    }



        public function loanInvalid($id){ //loan id comes in here
           $this->validate([
               'comment'=> 'required',
           ]);

            $this->lID = $id;
            if($this->docValidation=="Invalid"){
                LoanRequest::where('id',$id)->update([
                    'status' => 'Denied',
                    'comments' => $this->comment
                ]);

                Interview::where('loanReqID',$id)->update([
                    'status'=> 'Interviewed',
                    'scheduledBy' => Auth::user()->fName." ".Auth::user()->lName,
                    'interviewedBy' => Auth::user()->fName." ".Auth::user()->lName
                ]);

                Document::where('loanReqID',$id)->update([
                    'valid' => "Invalid",
                    'checkedBy' => Auth::user()->fName." ".Auth::user()->lName
                ]);
                return redirect()->route('viewInterviewSchedule');
            }
            elseif($this->docValidation=="Valid"){

                $viewSchedule=true;
                $this->viewDoc=false;
                $this->validDocs=true;
            }
        }

    public function loanValid($id){ //loan id comes in here

        $this->validate([
            'loanAmt'=> 'required',
            'intRate'=> 'required',
            'repayPeriod'=> 'required'
        ]);

        $this->viewSchedule=true;
        $this->viewDoc=true;
//        $amt= LoanRequest::find($id);

//        dd($monthlyPayment);
            LoanRequest::where('id',$id)->update([
                'status' => 'Approved',
                'comments' => "Customer met all the necessary requirements for loan to be approved."
            ]);

            Interview::where('loanReqID',$id)->update([
                'status'=> 'Interviewed',
                'interviewedBy' => Auth::user()->fName." ".Auth::user()->lName
            ]);

            Document::where('loanReqID',$id)->update([
                'valid' => "Valid",
                'checkedBy' => Auth::user()->fName." ".Auth::user()->lName
            ]);

        $a= $this->loanAmt;
        $rate = $this->intRate;
        $rate = $rate/100;
        $r = $rate/12;
        $period= $this->repayPeriod;
        $n= $period * 12;
        //calculation

        $k=$a*($r)*pow((1+$r),$n);
        $h = pow((1+$r),$n)-1;
        $monthlyPayment= $k/$h;
        $this->totalPay = $monthlyPayment*$n;
//        dd($this->totalPay);

            LoanInfo::create([
                'loanReqID'     => $id,
                'repayPeriod'   => $this->repayPeriod,
                'intRate'       => $this->intRate,
//                'processFee'    => $this->fee,
                'loanAmt'       => $this->loanAmt,
                'monthPay'      => $monthlyPayment,
                'totalRepAmt'   => $this->totalPay
            ]);
            $this->successMsg="success";
            $this->clearField();
            return redirect('dashboard/loan');
    }




    public function render()
    {
       $interviewSchedules=Interview::with('loanRequest')->where('status',"scheduled")->get();
//        dd($interviewSchedule);
        return view('livewire.live-interview-schedule',compact('interviewSchedules'));
    }
}
