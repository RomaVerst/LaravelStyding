<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class IndexController extends Controller
{
    function index(){
        return view('admin.index');
    }
    function test1(){
        return view('admin.test1');
    }
    function test2(){
        return view('admin.test2');
    }
}
