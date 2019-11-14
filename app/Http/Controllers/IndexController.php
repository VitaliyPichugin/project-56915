<?php
/**
 * Created by PhpStorm.
 * User: developer
 * Date: 14.11.19
 * Time: 14:40
 */

namespace App\Http\Controllers;


class IndexController extends Controller
{
    public function index(){
        return view('template.guest');
    }
}