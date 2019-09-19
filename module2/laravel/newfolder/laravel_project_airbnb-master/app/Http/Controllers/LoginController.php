<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginValation;
use App\Model\HousesModel;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function signIn()
    {
        if (isset($_COOKIE['remember_token']) && $_COOKIE['remember_token'] != "") {
            $token = $_COOKIE['remember_token'];
            if (Auth::attempt(['remember_token' => $token])) {
                return redirect()->route('dashboard');
            }
        } else {
            return view('login.sign-in');
        }
    }

    public function logout()
    {
        Auth::logout();
        unset($_COOKIE['remember_token']);
        setcookie('remember_token','',-1,'/');
        return redirect()->route('sign-in');
    }

    /**
     * @param LoginValation $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */

    public function login(LoginValation $request)
    {

        $use = $request->input('username');
        $pass = $request->input('password');
        $loginData = [
            'email' => $use,
            'password' => $pass
        ];

        if (Auth::attempt($loginData, true)) {
            return redirect()->route('dashboard');
        } else {
            return redirect()->route('sign-in')->with(['errLogin' => 'Sai tên đăng nhập hoặc mật khẩu']);
        }
    }

    public function editUser()
    {
        $login = User::all();
        return view('userPostHouse.edit-userPostHouse', [
            'login' => $login
        ]);
    }

    public function signUp()
    {
        return view('login.sign-up');
    }

    public function register(Request $request)
    {
        $register = new User();
        $register->role = $request->input('role');
        $register->name = $request->input('name');
        $register->email = $request->input('email');
        $register->password = bcrypt($request->input('password'));
        $register->save();
        return redirect()->route('sign-in');
    }

}
