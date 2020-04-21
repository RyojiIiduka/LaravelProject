<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class ViewController extends Controller
{
    public function master()
    {
        return view('master',[
            'msg' => 'こんにちは、世界！',
        ]);
    }

    public function comp()
    {
        return view('comp',[
            'msg' => 'こんにちは、世界！',
        ]);
    }

    public function comp2()
    {
        return view('comp2',[
            'msg' => 'こんにちは、世界！',
        ]);
    }
}
