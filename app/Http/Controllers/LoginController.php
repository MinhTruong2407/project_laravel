<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('login', [
            'title' => 'Đăng Nhập Hệ Thống'
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email:filter',
            'password' => 'required'
        ]);

        if (Auth::attempt([
                'email' => $request->input('email'),
                'password' => $request->input('password'),
            ], $request->input('remember'))) {

                return true;
                return redirect()->route('test');
    
            // }   

            // return redirect()->route('admin');
        // }
        // if(!Auth::user()){
        //     return redirect()->route('login');
        // }
        // if(Auth::users()->level() === 1){
        //     return redirect()->route('admin');
        // }
        // if(Auth::users()->level() === '0'){
        //     return redirect()->route('login');
        // }

        Session::flash('error', 'Email hoặc Password không đúng');
        return redirect()->back();
}
    }


}