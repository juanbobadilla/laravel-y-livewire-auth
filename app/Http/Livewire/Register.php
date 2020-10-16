<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\User;

class Register extends Component
{	

	public $form = [
		'name'		=>'',
		'email'		=>'',
		'password'	=>'',
	];

    public function render()
    {
        return view('livewire.register');
    }

    public function submit(){

    	$this->validate([
            'form.name'=>'required',
            'form.email'=>'required|email',
            'form.password'=>'required',
        ]);
        User::create($this->form);
        
        return redirect(route('login'));
    }


}
