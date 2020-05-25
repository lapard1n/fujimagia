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
    basketViewInit(){}

    plus(){}
    minus() {}

    commonPlus(){}
    commonMinus(){}

    viewUpdate(){}
    basketViewUpdate(){}
    addToBasket(){
        basket.addGood(this);
    }

    commonUpdate(){}



    static async init(){
        const goodCard = await fetch('templates/goodCard.html');
        Good.html = await goodCard.text();

        for (const good of Good.all)
        {
            good.viewInit();
        }
    }
}

Good.html = '';
Good.categoriesHtml = '';
Good.basketHtml = '';
Good.all = [];