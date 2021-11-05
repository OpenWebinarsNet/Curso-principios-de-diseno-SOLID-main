package SolucionJava.Shop.Shop.Type;

public class SuperMarket implements FoodShopInterface {
    private final Boolean SELL_PRECOOK = false;
    private final String HUMAN_TYPE_NAME = "SuperMarket";

    public String getType() {
        return HUMAN_TYPE_NAME;
    }


    public Boolean sellPreCook() {
        return SELL_PRECOOK;
    }
}
