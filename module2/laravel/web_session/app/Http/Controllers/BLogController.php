<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BLogController extends Controller
{
    public function showBlog(Request $request)
    {
        if ($request->session()->has('login') && $request->session()->get('login')) {
            return view('blog');
        } else {
            $message = 'ban chua dang nhap';
            $request->session()->flash('not-login', $message);
            return view('login');
        }

    }
}
session_s
