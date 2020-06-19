<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8" />
        <title>{{$title}}</title>
    </head>
    <body>
    <div id='app'>
        <my-hello></my-hello>
        <local></local>
    </div>
        <!--Vueの呼び出しはbodyの一番最後で行う -->
        <script src="https://cdn.jsdelivr.net/npm/vue@2.5.13/dist/vue.js"></script>
        <script src="{{ asset('/js/com.js') }}"></script>
    </body>
</html>