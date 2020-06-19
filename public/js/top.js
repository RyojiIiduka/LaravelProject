//Vueクラスのインスタンス化はvueの有効化を表す
//id=appの要素の中ではmessageを呼び出せば'こんにちは、Vue.je!'を表示する
//呼び出し方は{{}}を用いる方法(Laravel)はbladeのPHP変数と競合するため@を用いる
//もしくはディレクティブ「v-????」を用いる
var app = new Vue({
    el:'#app',
    data:{
        message:'こんにちは、Vue.js!'
    }
})