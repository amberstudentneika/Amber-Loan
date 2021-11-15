<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Auth;
class LiveLogin extends Component
{
    public $email, $password;

    public function login(){
    $this->validate([
      'email'=> 'required|email' ,
      'password' => 'required'
    ]);

    if(Auth::attempt([
        'email'=> $this->email,
        'password'=> $this->password]))
    {
        return redirect('')->route('home');
    }else{
        return redirect('login/employee')->with('message','Invalid login!');
    }
   }

    public function render()
    {
        return view('livewire.live-login');
    }
}
