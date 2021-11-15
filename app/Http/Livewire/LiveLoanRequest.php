<?php

namespace App\Http\Livewire;

use App\Models\Document;
use App\Models\LoanRequest;
use Livewire\Component;
use Livewire\WithFileUploads;

class LiveLoanRequest extends Component
{   use WithFileUploads;

    public $trn, $loanAmt, $firstname, $lastname, $gender, $mail, $tel, $homeAddress;
    public $addDocMode, $viewMode, $editMode, $addMode=false;
    public $trnImg, $income, $address, $identity, $image;
    public $formComplete;

//    public function add(){
//        $this->addMode=false;
//    }
    public function view(){
        $this->addDocMode=false;
        $this->addMode=true;
        $this->viewMode=true;
    }
    public function edit(){
        $this->addMode=false;
        $this->addDocMode=false;
        $this->viewMode=false;
    }

public function clearField(){
    $this->trn          = "";
    $this->firstname = "";
    $this->lastname = "";
    $this->gender = "";
    $this->mail = "";
    $this->tel = "";
    $this->loanAmt = "";
    $this->address = "";
    $this->income = "";
    $this->trnImg = "";
    $this->identity = "";
    $this->image= "";
    $this->homeAddress ="";
}
    protected $rules=[
        'firstname' => 'required',
        'lastname'  => 'required',
        'gender'    => 'required',
        'mail'      => 'required',
        'tel'       => 'required',
        'loanAmt'   => 'required',
        'trn'       => 'required',
        'homeAddress'       => 'required',
    ];

    protected $messages=[
        'firstname.required'  => 'Your firstname required.',
        'lastname.required'   => 'Your lastname required.',
        'homeAddress.required'     => 'Your home address is required.',
        'gender.required'     => 'Please select your gender',
        'mail.required'       => 'This field is required.',
        'tel.required'        => 'Your contact number is required.',
        'trnImg.required'    => 'Please upload a copy of your TRN.',
        'trn.required'        => 'Your tax registration number is required.',
        'income.required'     => 'Please upload copy of your income (pdf).',
        'address.required'    => 'Please upload proof of address [bill,letter].',
        'identity.required'   => 'Please upload a copy of your ID [ID, Passport].',
        'image.required'      => 'Please upload a passport size photograph.',
        'loanAmt.required'    => 'The loan amount is required.',
    ];

    public function updated($propertyName){
        $this->validateOnly($propertyName);
    }

    public function personalInfo(){
        $val=$this->validate();
        $this->addMode=true;
        $this->addDocMode=true;
//        dd($this->firstname);
    }
    public function back(){
        $this->addMode=false;
        $this->addDocMode=false;
    }

    public function personalDocs(){
        $this->validate([
        'trnImg'   => 'required|mimes:png,jpg,jpeg,pdf|max:10240',
        'income'      => 'required|mimes:png,jpg,jpeg,pdf|max:10240',
        'address'     => 'required|mimes:png,jpg,jpeg,pdf|max:10240',
        'identity'    => 'required|mimes:png,jpg,jpeg,pdf|max:10240',
        'image'       => 'required|mimes:png,jpg,jpeg,pdf|max:10240'
        ]);
    }

    public function submitLoanRequest(){
        //        dd($this->trn_img);
        $file1=$this->trnImg->getclientOriginalName();
        $file2=$this->income->getclientOriginalName();
        $file3=$this->address->getclientOriginalName();
        $file4=$this->identity->getclientOriginalName();
        $file5=$this->image->getclientOriginalName();
        $file1=$this->firstname.' '.$this->lastname.'[TRN]'.$file1;
        $file2=$this->firstname.' '.$this->lastname.'[POI]'.$file2;
        $file3=$this->firstname.' '.$this->lastname.'[POA]'.$file3;
        $file4=$this->firstname.' '.$this->lastname.'[ID]'.$file4;
        $file5=$this->firstname.' '.$this->lastname.'[Image]'.$file5;
        $this->trnImg->storePubliclyAs('LoanRequest',$file1,'docs');
        $this->income->storePubliclyAs('LoanRequest',$file2,'docs');
        $this->address->storePubliclyAs('LoanRequest',$file3,'docs');
        $this->identity->storePubliclyAs('LoanRequest',$file4,'docs');
        $this->image->storePubliclyAs('LoanRequest',$file5,'docs');
//        dd($file);

        $loanRID=LoanRequest::create([
            'trn'       => $this->trn,
            'fName'     => ucfirst($this->firstname),
            'lName'     => ucfirst($this->lastname),
            'gender'    => $this->gender,
            'homeAddress' => $this->homeAddress,
            'email'      => $this->mail,
            'phoneNum'   => $this->tel,
            'amount'     => $this->loanAmt,
            'status'     => 'Undecided',
            'comments'     => 'no comment added',
            'loanOfficer'=> 'Unassigned',
        ])->id;
        Document::create([
            'loanReqID'         => $loanRID,
            'poi'               => $file2,
            'poa'               => $file3,
            'trnImg'            => $file1,
            'identification'    => $file4,
            'photo'             => $file5,
            'valid'             => 'Undecided',
            'checkedBy'       => 'Unassigned',
        ]);
        $this->clearField();
        Session()->flash('Success','Successful');
        return redirect()->to('/');
    }




    public function render()
    {
        return view('livewire.live-loan-request');
    }
}

