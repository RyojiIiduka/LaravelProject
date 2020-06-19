@extends('layouts.base')
@section('title', '共通レイアウトの基本')
@section('main')
    <table class="table">
        <tr>
            <th>署名</th>
            <th>価格</th>
            <th>出版社</th>
            <th>刊行日</th>
            <th></th>
        </tr>
        @foreach ($records as $record)
        <tr>
            <td>{{$record->title}}</td>
            <td>{{$record->price}}</td>
            <td>{{$record->publisher}}</td>
            <td>{{$record->published}}</td>
            <td>
                <a href="/save/{{$record->id}}/edit">編集</a> | 
                <a href="/save/{{$record->id}}">削除</a>
            </td>
        </tr>
        @endforeach
    </table>
@endsection