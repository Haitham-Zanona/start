<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class SecondController extends Controller
{

    /* public function __construct()
    {
        $this->middleware('auth')->except(methods:'showString2');
    } */
    public function showString(){
        return 'welcome';
    }

    public function showString0(){
        return 'welcome0';
    }

    public function showString1(){
        return 'welcome1';
    }
    public function showString2(){
        return 'welcome2';
    }
}
