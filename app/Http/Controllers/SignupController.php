<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;
class SignupController extends Controller
{   
     public function index() {
        return view('signup', [
            'title' => 'Đăng ký tài khoản'
        ]);
    }

    public function store(Request $request) {
        $id = mt_rand( 1000000000, 9999999999 );
        $username = $request->input('username');
        $name = $request->input('name');
        $birthday = $request->input('birthday');
        $email = $request->input('email');
        $password = bcrypt($request->input('password'));
        $user = array(
            'id' => $id,
            'username' => $username, 
            'name' => $name,
            'birthday' => $birthday,
            'email' => $email,
            'password' => $password,
        );
        DB::table('users')->insert($user);
        return redirect('/login');

    }
}
