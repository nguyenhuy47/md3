<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function send()
    {
     return 123;
    }

    public function getAll()
    {
        $product = table_product::all();
        return 123;
    }
}
