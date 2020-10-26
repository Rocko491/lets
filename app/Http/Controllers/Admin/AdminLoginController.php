<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
//use http\Client\Curl\User;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class AdminLoginController extends Controller
{
    public function index()
    {
        return view('admin.admin_login');
    }

    public function admin_login(Request $request)
    {
        $user = User::where('email', $request['email'])->first();
        if(isset($user)){
            Auth::login($user);
            return redirect('/admin/dashboard');
        }else{
            return redirect('/admin');
        }
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function logout()
    {
        return redirect('/admin');
    }
}
