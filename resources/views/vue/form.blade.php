<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8" />
        <title>{{$title}}</title>
    </head>
    <body>
        <div id="app">
            <form>
                <label for="name">氏名：</label>
                <!-- v-model="myName"でテキストとオブジェクトのmyNameを紐付けている -->
                <input type="text" id="name" v-model="myName"/>
            </form>
            <div>こんにちは、@{{myName}}さん！</div>
        </div><br>

        <div id="app2">
            <form>
                <label for="show">表示/非表示</label>
                <input type="checkbox" id="show" v-model="toggle">
            </form>
            <div id="panel" v-if="toggle">
                <h3>四季の真偽に応じて表示/非表示を引き換える</h3>
        </div>
        <!--Vueの呼び出しはbodyの一番最後で行う -->
        <script src="https://cdn.jsdelivr.net/npm/vue@2.5.13/dist/vue.js"></script>
        <script src="{{ asset('/js/form.js') }}"></script>
    </body>
</html>