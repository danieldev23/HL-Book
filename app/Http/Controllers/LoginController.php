<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index()
    {
        return view('login', ['title' => 'Đăng Nhập HL Book']);
        
    }

    public function store(Request $request)
    {
        $this->validate($request, ['email' => 'required|email:filter', 'password' => 'required']);

        if (Auth::attempt([
            'email' => $request->input('email') , 
            'password' => $request->input ('password') ],
             $request->input('remember')))
        {

            return redirect()
                ->route('home');
        }
        Session::flash('error', 'Email hoặc mật khẩu không đúng');
        return redirect()
            ->back();
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}

