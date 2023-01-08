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

        $first_name = $request->input('first_name');
        $last_name = $request->input('last_name');
        // $id = mt_rand(1, 50);
        // $user_id = $last_name .'.'.$id;
        $username = mb_strtolower($last_name, 'UTF-8') . '' .rand();
        $name = $first_name. ' ' .$last_name;
        $birthday = $request->input('birthday');
        $email = $request->input('email');
        $password = bcrypt($request->input('password'));
        $user = array(
            // 'id' => $id,
            // 'user_id' => $user_id,
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
