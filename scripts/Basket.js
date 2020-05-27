class Basket {
    constructor() {
    }

    updateCommonPrice() {
    }

    addGood(good) {
        const itemsCount = document.querySelector('.nav__sum');
        itemsCount.innerHTML = parseInt(itemsCount.innerHTML) + 1;
        // console.log(document.querySelector('.nav__sum').innerHTML += 1);
    }

    updateGood(good){}
}