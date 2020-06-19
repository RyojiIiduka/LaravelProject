//Vueクラスのインスタンス化はvueの有効化を表す
//id=appの要素の中ではmessageを呼び出せば'こんにちは、Vue.je!'を表示する
//呼び出し方は{{}}を用いる方法(Laravel)はbladeのPHP変数と競合するため@を用いる
//もしくはディレクティブ「v-????」を用いる
var app = new Vue({
    el:'#app',
    data:{
        current: new Date().toLocaleString()
    },
    cumputed:{
        //算出プロパティ経由で乱数を取得
        randomc: function() {
            return Math.random();
        }
    },
    methods: {
        //クリック時に処理を実行
        onclick: function() {
            this.current = new Date().toLocaleString();
        },
        //メソッド経由で乱数を取得
        randomm: function() {
            return Math.random();
        }
    }
})