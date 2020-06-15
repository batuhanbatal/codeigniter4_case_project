<?php namespace App\Controllers\Auth;

use App\Controllers\BaseController; 

class Login extends BaseController
{
	public function index()
	{
        helper(['form']);
		return view('auth/login.php');
    }
    
    public function action()
    {
       echo "sa";
    }
}
