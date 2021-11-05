package SolucionJava.Shop.Shop;

public class StandardShop extends AbstractShop{
    private ShopTypeInterface shop_type;

    public StandardShop(String name, Integer phone, ShopTypeInterface shop_type) {
        this.shop_type = shop_type;

        super(name, phone);
    }

    public ShopTypeInterface getShopType() {
        return this.shop_type;
    }
}
