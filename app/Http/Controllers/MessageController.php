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

    public function freeword($wrd) {
        return view('message.freeword', ['wrd' => $wrd]);
    }

    public function random() {
        $greeting = array("おはよう", "こんにちは", "こんばんは", "おやすみ");
        $rnd_greeting = $greeting[array_rand($greeting, 1)];
        return view('message.random', ['rnd_greeting' => $rnd_greeting]);
    }

}
