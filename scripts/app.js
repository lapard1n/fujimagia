const shop = new Shop();
const basket = new Basket();
app();

async function app() {
    await Promise.all([
        Good.init(),
        shop.loadGoods()
    ]);
    shop.showGoods();
    shop.categoriesControl();
    shop.cartButtonControl();
}