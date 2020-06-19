Vue.component('my-hello',{
    template:'<div>こんにちは、コンぽーねんと！</div>'
});
var local = {
    template:'<div>こんにちは、ローカルコンポーネントです</div>'
}
new Vue({
    el:'#app',
    //コンポーネントをローカル登録
    components:{
        'local':local
    }
});