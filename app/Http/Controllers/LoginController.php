<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{

	public function index()
	{
		return View('Login/login');
	}

      /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */

      public function authenticate(Request $request)
      {
      	# code...
      	$credentials=$request->only('name','password');

      	if(Auth::attempt($credentials)){
      		$request->session()->regenerate();
      		return redirect('/Biemvenido');
      	}
      	return back();
      }

      /**
		 * Log the user out of the application.
		 *
		 * @param  \Illuminate\Http\Request $request
		 * @return \Illuminate\Http\Response
		*/
      public function logout(Request $request)
      {
      	# code...
      	Auth::logout();
      	$request->session()->invalidate();
      	$request->session()->regenerateToken();
      	return redirect('/');
      }


}
