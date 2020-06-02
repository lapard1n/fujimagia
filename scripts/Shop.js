class Shop{
    constructor() {
        this.goods = [];
        this.divShopWindow = document.getElementById('shopWindow');

        this.categoryClassic = document.getElementById('category__classic');
        this.categoryAll = document.getElementById('category__all');
        this.categoryBaked = document.getElementById('category__baked');
        this.categoryMini = document.getElementById('category__mini')
    }

    async loadGoods(){
        this.goods = [];

        const url = 'http://fuji.local/api/';
        const postData = {
            name: 'getProducts',
            params:{}
        };
        const response = await fetch(url, {
            method: 'POST',
            body: JSON.stringify(postData),
            headers : {
                'Content-Type': 'application/json'
            }
        });
        const answer = await response.json();
        const dataItems = answer.response.result[0];
        for (const dataItem of dataItems)
        {
            const good = new Good(dataItem);
            this.goods.push(good);
        }

    }
    showGoods(){
        this.divShopWindow.innerHTML = "";
        for (const good of this.goods){
            this.divShopWindow.appendChild(good.html);
        }

    }

    categoriesControl(){

        const getCards = () => { return document.querySelectorAll(".card"); }

        const viewUpdate = (domObj) => {
            domObj.forEach(el =>{
                el.classList.remove("card__disable")
            });
        }
        const disableCardsWithot = (c_type) => {
            const allCards = getCards();
            viewUpdate(allCards);
            allCards.forEach((el, i) =>{
                if(!el.classList.contains(`card-category__${c_type}`))
                {
                    el.classList.add('card__disable');
                }
            });
        }

        this.categoryAll.addEventListener('click', (e) => {
            const allCards = getCards();
            viewUpdate(allCards);
        });

        this.categoryClassic.addEventListener('click', () => { disableCardsWithot(`classic`); });

        this.categoryBaked.addEventListener('click', (e =>{
            disableCardsWithot('baked');
        }));

        this.categoryMini.addEventListener('click', (e => {
            disableCardsWithot('mini')
        }));
    }

    cartButtonControl(){
        const cartButton = document.querySelector('#cartButton');
        const cartDiv = document.querySelector('#cartWindow')

        cartButton.addEventListener('click', () => {
            if(cartDiv.classList.contains('cart__disable')) cartDiv.classList.remove('cart__disable');
            else cartDiv.classList.add('cart__disable');
        });
    }
}