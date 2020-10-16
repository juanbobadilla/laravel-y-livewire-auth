<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{
	public $form = [
		'email'		=>'',
		'password'	=>'',
	];

    public function render()
    {
        return view('livewire.login');
    }

     public function submit(){

    	$this->validate([
            'form.email'=>'required|email',
            'form.password'=>'required',
        ]);
    	
    	$datos = Auth::attempt($this->form);
        if ($datos==true) {
            session()->flash('messages', 'Bienvenido');
            return redirect(route('home'));
        }else{
            session()->flash('messages', 'Usuario o Contraseña incorrecta');
        }
        
    }


}
