<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
	use Notifiable;
	
	//campos requeridos
    protected $fillable =[
    	'name','email','password',
    ];

    //metodo para encriptar contraseñas
    public function setPasswordAttribute($value){
    	$this->attributes['password']=bcrypt($value);
    }


}
