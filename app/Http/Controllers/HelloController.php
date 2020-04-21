<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class HelloController extends Controller
{
    //

    public function index()
    {
        return 'こんにちは、ここはハローコントローラーです。';
    }

    public function view()
    {
        $data = [
            'msg' => 'ビュー経由でメッセージ出力します',
        ];

        return view('hello.view', $data);
    }

    public function list()
    {
        //booksテーブルから全行取得
        $data = [
            'records' => Book::all()
        ];
        return view('hello.list', $data);
    }
}
