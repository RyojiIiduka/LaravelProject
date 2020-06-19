<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class JangController extends Controller
{
    public function index()
    {
        return view('jang.index',[
            'title' => '筋トレ',
        ]);
    }
}