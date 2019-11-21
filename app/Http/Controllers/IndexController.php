<?php

namespace App\Http\Controllers;


class IndexController extends Controller
{
    public function index()
    {
        return view('layouts.app');
    }

    public function test()
    {
        return view('layouts.app');
    }
}