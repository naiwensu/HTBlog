<?php

namespace App\Http\Controllers;

use App\Http\Middleware\RedirectIfAuthenticated;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function register()
    {
        return view('register');
    }

    public function doregist(Requests\Users\RegisterRequest $request)
    {
        $nickname = $request->get('nickname');
        $email = $request->get('email');
        $password = $request->get('password');
        $user = new User();
        $user->nickname = $nickname;
        $user->email = $email;
        $user->password = Crypt::encrypt($password);
        if($user->save()) {
            return Redirect::to('/login');
        } else {
            return Redirect::to(-1);
        }
    }

    public function login()
    {
        return view('login');
    }

    public function dologin(Requests\Users\LoginRequest $request)
    {
        $email = $request->get('email');
        $password = $request->get('password');
        $user = User::where('email', '=', $email)->first();
        if(!$user) {
            return Redirect::to(-1);
        }
        if($password != Crypt::decrypt($user->password)) {
            return Redirect::to(-1);
        } else {
            session()->set('user', $user);
            return Redirect::to('');
        }

    }

    public function logout()
    {
        session()->set('user', null);
        return Redirect::to('/');
    }

}
