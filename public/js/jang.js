new Vue({
    el:'#app',
    data: {
        isActive: true,
        items:[],
        show: false,
        man: false,
        so: false,
        pin: false,
        ex: false,
        mid: false,
        low: false,
    },
    methods: {
        display: function () {
            let errorWord = '';
            let selectedType = this.countType();
            if (selectedType.length !== 2) {
                errorWord = '牌の種類を２つ選択してね。';
            }
            if (this.countLevel() !== 1) {
                errorWord = errorWord + 'レベルは一つ選択してね。';
            }
            if (errorWord === '' ) {
                this.items = [];
                this.show = true;
                array = [3,3,3,3,4,4,4,4,5,5,5,5,6,6,6,6,7,7,7,7];
                //2~8,1~9が選択されていた場合
                if (this.mid) {
                    array.push(2,2,2,2,8,8,8,8);
                } else if (this.low) {
                    array.push(2,2,2,2,8,8,8,8,1,1,1,1,9,9,9,9);
                }
                for (let j = 0; j < 5 ; j++) {
                    //ランダムに添え字を返す
                    fetchedItem = Math.floor(Math.random() * array.length);
                    temp = 'image/man' + array[fetchedItem] + '.gif';
    
                    //配列から抜き出した要素を削除
                    array.splice(fetchedItem, 1);
                    this.items.push({hai:temp});
                }
            } else {
                alert(errorWord);
            }
        },
        selectLevel: function (level) {
            switch (level) {
                case 'ex':
                    this.ex = true;
                    this.mid = false;
                    this.low = false;
                    break;
                case 'mid':
                    this.ex = false;
                    this.mid = true;
                    this.low = false;
                    break;
                case 'low':
                    this.ex = false;
                    this.mid = false;
                    this.low = true;
                    break;
            }
        },
        //受け取った要素のONOFFを切り替える
        selectType: function (type) {
            if (type === 'man') {
                if (this.man === true) {
                    this.man = false;
                } else {
                    if (this.countType().length >= 2) {
                        alert('種類は２つまでにしてね');
                    } else {
                        this.man = true;
                    }
                }
            } else if (type === 'so') {
                if (this.so === true) {
                    this.so = false;
                } else {
                    if (this.countType().length >= 2) {
                        alert('種類は２つまでにしてね');
                    } else {
                        this.so = true;
                    }
                }
            } else if (type === 'pin') {
                if (this.pin === true) {
                    this.pin = false;
                } else {
                    if (this.countType().length >= 2) {
                        alert('種類は２つまでにしてね');
                    } else {
                        this.pin = true;
                    }
                }
            }
        },
        //選択されている牌の種類を返す
        countType: function () {
            let type = [];
            if (this.man) {
                type.push('man');
            }
            if (this.so) {
                type.push('so');
            }
            if (this.pin) {
                type.push('pin');
            }
            return type;
        },
        countLevel: function () {
            let count = 0;
            if (this.ex) {
                count++;
            }
            if (this.mid) {
                count++;
            }
            if (this.low) {
                count++;
            }
            return count;
        }
    }
});