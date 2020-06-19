<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class SaveController extends Controller
{
    public function create()
    {
        echo 'くりえいと';
        return view('save.create');
    }


    //フォームの入力値をデータベースに入力
    public function store(Request $req)
    {
        //モデルで定義したバリデーションチェックを実施
        $this->validate($req, Book::$rules);

        //a. モデルオブジェクトにデータ詰め替え
        $b = new Book();

        //fillメソッドはメモリー上の操作、saveメソッドによりDBに保存される
        //'_token'は@csrfディレクティブによりフォームから渡されるワンタイムトークンである、DBにはこちらは除いて保存する
        $b->fill($req->except('_token'))
            ->save();
        return redirect('save/create');
    }

    public function edit($id)
    {
        //指定された書籍情報を取得
        return view('save.edit', [
            'b' => Book::findOrFail($id)
        ]);
    }

    public function update(Request $req, $id)
    {
        //目的のデータを取得
        $b = Book::find($id);
        //入力値でモデルを更新＆保存
        $b->fill($req->except('_token', '_method'))->save();
        return redirect('hello/list');
    }

    public function show($id)
    {
        return view ('save.show',[
            'b' => Book::findOrFail($id)
        ]);
    }

    public function destroy($id)
    {
        $b = Book::findOrFail($id);
        $b->delete();
        return redirect('hello/list');
    }
}