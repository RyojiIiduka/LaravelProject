<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8" />
        <title>速習Vue.js</title>
    </head>
    <body>
        <!--ページ本体-->
        <div id="app">
        <p>@{{ message }}</p>
        <p v-text="message"></p>
        </div>

        <!--Vueの呼び出しはbodyの一番最後で行う -->
        <script src="https://cdn.jsdelivr.net/npm/vue@2.5.13/dist/vue.js"></script>
        <script src="{{ asset('/js/top.js') }}"></script>
    </body>
</html>