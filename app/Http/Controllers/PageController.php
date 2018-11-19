<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PageController extends Controller
{
    public function getindex()
    {
        return view('users.index');
    }
    public function getlist()
    {
        return view('users.blog');
    }
    public function getquickview()
    {
        return view('users.quick-view');
    }
    public function productdetail()
    {
        return view('users.product-detail');
    }
    public function contact()
    {
        return view('users.contact');
    }
}
