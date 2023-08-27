<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function morning() {
        return view('message.morning');
    }

    public function afternoon() {
        return view('message.afternoon');
    }

    public function evening() {
        return view('message.evening');
    }

    public function night() {
        return view('message.night');
    }

}
