class Basket {
    constructor() {
        this.goods = [];
        this.commonPrice = 0;
        this.totalItems = 0;
        
        this.divCartWindow = document.getElementById('cartWindow');
        this.divEmptyCart = document.getElementById('emptyCart');
        this.divFullCart = document.getElementById('fullCart');
        this.divCommonPrice = document.getElementById('commonPrice');
        this.divCartTotal = document.getElementById('cartTotal');
        this.spanTotalCount = document.getElementById('cart__total-count');

        this.updateCommonPrice();
    }

    updateCommonPrice() {
        this.commonPrice = 0;
        this.totalItems = 0;
        for (const good of this.goods){
            this.commonPrice += good.commonPrice;
            this.totalItems += 1;
        }
        this.divCommonPrice.innerText = this.commonPrice;
        this.spanTotalCount.innerText = this.totalItems;
    }
    incGood(){
        const itemsCount = document.querySelector('.nav__sum');
        itemsCount.innerHTML = parseInt(itemsCount.innerHTML) + 1;
    }
    decGood(count){
        const itemsCount = document.querySelector('.nav__sum');
        itemsCount.innerHTML = parseInt(itemsCount.innerHTML) - count;
    }

    insertAfter(newNode, referenceNode) {
        referenceNode.parentNode.insertBefore(newNode, referenceNode.nextSibling);
    }

    addGood(good = 1) {
        if(!this.goods.includes(good)){
            this.goods.push(good);

        }
        // this.incGood();
        good.commonCount += good.count;
        good.commonPrice = good.commonCount * good.price;
        // this.insertAfter(good.basketHtml, this.divCartWindow.firstChild);
        this.divCartWindow.insertBefore(good.basketHtml, null);
        // this.spanTotalCount.innerText = good.commonCount;
        good.basketViewUpdate();
        this.updateCommonPrice();
    }
    removeAfter(node, referenceNode){
        referenceNode.parentNode.removeChild(node, referenceNode.nextSibling);
    }
    removeGood(good){
        if(this.goods.includes(good)){

            this.goods.forEach((el, index) => {

                if (el === good) {
                    // this.decGood(good.commonCount);
                    good.commonCount = 1;
                    // good.commonPrice = 0;
                    good.count = 1;
                    this.goods.splice(this.goods.indexOf(good), 1);
                }
            });
        }
        console.log(this.goods);
        good.commonCount -= good.count;
        good.commonPrice = good.commonCount * good.price;
        // console.log(good.count, good.commonCount, good.price);
        this.divCartWindow.removeChild(good.basketHtml);
        good.basketViewUpdate();
        this.updateCommonPrice();
    }

    updateGood(good){

    }

}