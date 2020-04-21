<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BookController extends Controller
{
    public function list()
    {
        //booksテーブルから全行取得
        $data = [
            'records' => Book::all()
        ];
        return view('list', $data);
    }
}
