<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(){

        $title="Laravel 10";

        return view('test',compact('title'));

    }
}
