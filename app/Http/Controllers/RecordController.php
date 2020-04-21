<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class RecordController extends Controller
{
    public function find()
    {
        //booksテーブルから全行取得
        return Book::find(1)->title;
    }

    public function where()
    {
        //booksテーブルから全行取得
        $result = Book::where('publisher','日経BP')->get();
        return view('hello.list', ['records' => $result]);
    }
}
