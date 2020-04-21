@extends('layouts.base')
@section('title','フォームの基本')
@section('main')
    <!--a.エラーメッセージを表示-->
    @if (@session('alert'))
    <div class="alert">{{session('alert')}}</div>
    @endif
    <form method="POST" action="/ctrl/result">
        <!-- a.CSRF対策(おまじない)-->
        @csrf
        <!--b.もとの入力値を反映-->
        <label id="name">名前：</label>
        <input id="name" name="name" type="text" 
        value ="{{ old('name', '') }}" />
        <input type="submit" value="送信" />
        <p>{{$result}}</p>
    </form>
@endsection