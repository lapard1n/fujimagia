class Shop{
    constructor() {
        this.goods = [];
        this.divShopWindow = document.getElementById('shopWindow');
    }

    async loadGoods(){
        this.goods = [];

        const url = 'http://localhost:3000/api';
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
}