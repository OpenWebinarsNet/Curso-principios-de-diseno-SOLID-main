package SolucionJava.Shop.Shop.Type;

public class ToyStore implements ToyShopInterface {
    private final Boolean PLAY_PLACE = true;
    private final String HUMAN_TYPE_NAME = "Toy store";

    public String getType() {
        return HUMAN_TYPE_NAME;
    }

    public Boolean playPlaceAvailable() {
        return PLAY_PLACE;
    }
}
