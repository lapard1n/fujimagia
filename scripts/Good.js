class Good {
    constructor(params) {
        this.id = params.id;
        this.name = params.name;
        this.imgSrc = params.imgSrc;
        this.gram = params.gram;
        this.price = params.price;
        this.category = params.category;
        this.count = 1;

        this.commonCount = 0;
        this.commonPrice = 0;
        this.html = null;
        this.basketHtml = null;

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
        let cartState = JSON.parse(localStorage.getItem('cart'));
        // console.log(cartState.goods);
        if (cartState) {
            cartState.goods.forEach((e) => {
                if (this.id === e.id) {
                    this.addToBasket(true);
                }
            });
        }
    }

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

    addToBasket(fromStore = false){
        basket.addGood(this, fromStore);
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