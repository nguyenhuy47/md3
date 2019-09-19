<?php

namespace App\Http\Controllers;

use App\Http\Requests\InformationValation;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;


class DashBoardController extends Controller
{
    public function dashBoard()
    {
        $user = Auth::user();
        if (Auth::check()) {setcookie('remember_token', $user->getRememberToken(), time() + 600, '/');
        }
        if ($user->role == 1) {
            return redirect()->route('dashBoard');
        } else if ($user->role == 2) {
            return view('collection.user.dashboard', compact('user'));
        }

    }

    public function editUserBockHouse($id)
    {
        $users = User::where('id', $id)->get();
        return view('collection.user.edit-user', compact('id', 'users'));
    }

    public function editUser($id)
    {
        $users = User::where('id', $id)->get();
        return view('collection.user.edit-user', compact('id', 'users'));
    }


    public function updateUser(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->address = $request->input('address');
        $user->phone = $request->input('phone');
        $user->save();
        return redirect()->route('editUsers', Auth::user()->id)->with(['messenger' => 'Đã đổi thành công']);
    }


    public function forgotPassword($id)
    {
        $users = User::where('id', $id)->get();
        return view('collection.user.forgot-password', compact('id', 'users'));
    }


    public function forgotPass(Request $request)
    {
        $current_password = Auth::user()->password;
        if (Hash::check($request->input('password'), $current_password)) {
            $user = Auth::user();
            $user->password = bcrypt($request->input('password-new'));
            $user->save();
            return redirect()->route('forgot-pass', Auth::user()->id)->with(['messenger1' => ' Đã đổi thành công']);
        } else {
            return redirect()->route('forgot-pass', Auth::user()->id)->with(['messenger2' => 'Mật khẩu không chính xác']);
        }
    }
}
