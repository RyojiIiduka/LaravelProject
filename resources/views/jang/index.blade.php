<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="css/jang.css">
        <title>{{$title}}</title>
    </head>
    <body>
    <div id="app" v-cloak>
        <!-- バインディング、exmidlowがtrueならクラスにactive付与 -->
        <button v-bind:class="{active: ten}" v-on:click="setNumber(10)">10枚</button>
        <button v-bind:class="{active: thi}" v-on:click="setNumber(13)">13枚</button>
        <button v-bind:class="{active: man}" v-on:click="selectType('man')">萬子</button>
        <button v-bind:class="{active: so}" v-on:click="selectType('so')">索子</button>
        <button v-bind:class="{active: pin}" v-on:click="selectType('pin')">筒子</button>
        <button v-bind:class="{active: ex}" v-on:click="selectLevel('ex')">3~7</button>
        <button v-bind:class="{active: mid}" v-on:click="selectLevel('mid')">2~8</button>
        <button v-bind:class="{active: low}" v-on:click="selectLevel('low')">1~9</button>
        <button v-on:click="display">表示</button>
        <div class="jang-field" v-show="show">
            <ul>
                <li v-for="item in items">
                    <img v-bind:src=item.hai>
                </li>
            </ul>
        </div>
    </div>
        <!--Vueの呼び出しはbodyの一番最後で行う -->
        <script src="https://cdn.jsdelivr.net/npm/vue@2.5.13/dist/vue.js"></script>
        <script src="{{ asset('/js/jang.js') }}"></script>
    </body>
</html>