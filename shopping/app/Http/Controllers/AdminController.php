<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function loginAdmin()
    {

    	//dd(bcrypt('thaoxingai')); //bcrypt tạo password mã hóa
    
    	return view('login');
    }

    public function postLoginAdmin(Request $request)
    {
		$request->validate([
			'email'=>'required|email',
			'password'=>'required|min:5|max:100',
   
		]);
		$admin=DB::table("users")->where("email",$request->email)->where("password",$request->password)->first();
		if($admin)
		{
			$request->session()->put('admin_name',$admin->name);
			$request->session()->put('admin_id',$admin->id);
			return redirect("/admin/product");
		}
		else
		{
			return back()->with("error","tài khoản mật khẩu không dúng");
		}
    	dd($request);
    }
}
