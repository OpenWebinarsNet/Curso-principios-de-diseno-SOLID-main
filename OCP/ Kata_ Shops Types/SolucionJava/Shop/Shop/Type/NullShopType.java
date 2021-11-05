package SolucionJava.Shop.Shop.Type;

public class NullShopType implements ShopTypeInterface {
    private final String HUMAN_TYPE_NAME = "Generic type";

    public String getType() {
        return HUMAN_TYPE_NAME;
    }
}
