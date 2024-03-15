<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RandomUserController extends Controller
{
    public function welcome() {
        return view("randomUser.welcome");
    }

    public function explore() {
        return view("randomUser.explore");
    }

    public function category() {
        return view("randomUser.category");
    }

}
