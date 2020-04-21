@extends('layouts.base')
@section('title', '共通レイアウトの基本')
@section('main')
    <!--a.かんたんな値を渡す-->
    @component('components.alert', ['type' => 'success'])
        <!--b.コンテンツを引き渡す-->
        @slot('alert_title')
            はじめてのコンポーネント
        @endslot
        <!--c.その他のコンテンツを渡す-->
        コンポーネントは普通のビューと同じように.blade.phpファイルで定義できます！
    @endcomponent
@endsection