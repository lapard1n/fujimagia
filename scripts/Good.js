class Good {
    constructor(params) {
        this.name = params.name;
        this.imgSrc = params.imgSrc;
        this.gram = params.gram;
        this.price = params.price;
        this.category = params.category;
        this.count = 1;

        this.commonCount = 0;
        this.commonPrice = 0;
        this.html = null;
        this.categoriesHtml = null;
        this.basketHtml = null;

        this.buyButton = null;
        this.cardQuantity = null;

        Good.all.push(this);

        if(Good.html) this.viewInit();
    }

    viewInit() {
        let str = Good.html.slice();
        for(const substr of str.match(/{{% \w+ %}}/g)){
            str = str.replace(substr, this[substr.substr(4, substr.length - 8)])
        }
        const temp = document.createElement('div');
        temp.classList.add('all');
        temp.innerHTML = str;

        this.html = temp.firstChild;
        for (const element of this.html.querySelectorAll('[data-onclick]')){
            const handlerName = element.dataset.onclick;

            element.addEventListener('click', () => this[handlerName]());
        }
    }

    async initFromStore(basketState = null, goodState = null) {

        let goodFromStore = null;

        let cardState = JSON.parse(localStorage.getItem('card'));
        let cartState = JSON.parse(localStorage.getItem('cart'));


        cartState.goods.forEach((e) => {
            basket.goods.push(e);
        });

        goodFromStore = cardState.basketHtml;
        const temp = document.createElement('div');
        temp.innerHTML = goodFromStore;
        this.html = temp.firstChild;
        for (const element of this.html.querySelectorAll('[data-onclick]')){
            const handlerName = element.dataset.onclick;
            element.addEventListener('click', () => this[handlerName]());
        }

        basketState.divCartWindow.insertBefore(goodFromStore, null);
        // this.commonPrice = res.goods.commonPrice;
        // this.commonCount = res.goods.length;
        // this.addGood();
        // let res = JSON.parse(basket.initFromStore());
        // console.log(res.goods);
    }

    basketViewInit(){
        let str = Good.basketHtml.slice();
        for(const substr of str.match(/{{% \w+ %}}/g)){
            str = str.replace(substr, this[substr.substr(4, substr.length - 8)])
        }
        const temp = document.createElement('div');
        temp.innerHTML = str;

        this.basketHtml = temp.firstChild;
        for (const element of this.basketHtml.querySelectorAll('[data-onclick]')){
            const handlerName = element.dataset.onclick;
            element.addEventListener('click', () => this[handlerName]());
        }
    }

    // plus(){
    //     this.count += 1;
    //     this.viewUpdate();
    //     this.addToBasket();
    // }
    // minus(){
    //     // if(this.count != 0)
    //     {
    //         this.count -= 1;
    //         this.viewUpdate();
    //         this.removeFromBasket();
    //         this.commonUpdate();
    //         // this.basketViewUpdate();
    //     }
    // }

    commonPlus(){
        this.commonCount += 1;
        this.commonPrice = this.commonCount * this.price;
        basket.updateState(basket, this);
        // this.addToBasket();
        this.basketViewUpdate();

        this.commonUpdate();
    }
    commonMinus(){

        if(this.commonCount - 1 > 0){
            this.commonCount -= 1;
            this.commonPrice = this.commonCount * this.price;
            this.basketViewUpdate();

            this.commonUpdate();
        }else
        {
            this.removeFromBasket();
        }
    }

    viewUpdate(){
        this.html.querySelector('.card #card__quantity-current').textContent = this.count;
    }
    basketViewUpdate(){
        this.basketHtml.querySelector('.order-row #card__quantity-current').textContent = this.commonCount;
    }

    addToBasket(){
        basket.addGood(this);
    }
    removeFromBasket(){
        basket.removeGood(this);
    }

    commonUpdate(){
        basket.updateCommonPrice();
    }

    static async init(){
        const goodCard = await fetch('templates/goodCard.html');
        Good.html = await goodCard.text();

        const goodBasketCard = await fetch('templates/goodCart.html');
        Good.basketHtml = await goodBasketCard.text();

        for (const good of Good.all)
        {
            good.viewInit();
            good.basketViewInit();
        }
    }
}

Good.html = '';
Good.basketHtml = '';
Good.all = [];