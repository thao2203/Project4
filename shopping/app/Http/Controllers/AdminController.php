<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AdminController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function loginAdmin()
    {

    	// dd(bcrypt('thaoxingai')); //bcrypt tạo password mã hóa
    	if(auth()->check())
    	{
    		return redirect()->to('home');
    	}
    	return view('login');
    }

    public function postLoginAdmin(Request $request)
    {
    	$remember = $request->has('remember_me') ? true : false;
    	//auth() pthuc check tài khoản xem hợp lệ hay ko
    	if(Auth::attempt([
    		'email' => $request->email,
    		'password' => $request->password
    	], $remember)){
    		return redirect()->to('home');
    	}
    }
}
