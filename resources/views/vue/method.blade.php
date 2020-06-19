<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8" />
        <title>{{$title}}</title>
    </head>
    <body>
        <!--ページ本体-->
        <div id="app">
            <form>
                <input type="button" value="クリック" v-on:click="onclick">
            </form>
            <p>算出プロパティ：@{{ randomc }}</p>
            <p>メソッド：@{{ randomm() }}</p>
            <p>現在日時：@{{ current }}</p>
        </div>

        <!--Vueの呼び出しはbodyの一番最後で行う -->
        <script src="https://cdn.jsdelivr.net/npm/vue@2.5.13/dist/vue.js"></script>
        <script src="{{ asset('/js/method.js') }}"></script>
    </body>
</html>