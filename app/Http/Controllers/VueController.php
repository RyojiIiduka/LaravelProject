<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VueController extends Controller
{
    public function top()
    {
        return view('vue.top',[
            'msg' => 'こんにちは、世界！',
        ]);
    }

    public function method()
    {
        return view('vue.method',[
            'title' => '算出メソッド',
        ]);
    }

    public function form()
    {
        return view('vue.form',[
            'title' => 'フォーム開発',
        ]);
    }

    public function com()
    {
        return view('vue.com',[
            'title' => 'コンポーネント',
        ]);
    }
}
