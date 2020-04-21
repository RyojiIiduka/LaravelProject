<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <!--a. titleの置き場所 -->
        <title>@yield('title')</title>
        <!--Bootstrapのインポート-->
        <link rel="stylesheet" href="https://stackpath.cootstrapcdn.com/bootstrap/4.3.1/cssbootstrap.min.css">
    </head>
    <body>
        <img src="https://wings.msn.to/image/wings.jpg" title="ロゴ" />
        <hr />
        <!--b.mainコンテンツの置き場所-->
        @section('main')
        <p>規定のコンテンツです。</p>
        @show
        <hr />
        <p>Copyright(c) 1988-2019,WINGS Project. AllRight Reserved.</p>
    </body>
</html>