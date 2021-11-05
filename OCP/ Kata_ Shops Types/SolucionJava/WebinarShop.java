package SolucionJava;

import SolucionJava.*;

public class WebinarShop {
    private AbstractShop shop;
    private NotifierInterface notifier;
    private ShopSQLPersistenceInterface repo;
    private ShopRedisPersistenceInterface memory_repo;

    public WebinarShop(AbstractShop shop, NotifierInterface notifier, ShopSQLPersistenceInterface repo, ShopRedisPersistenceInterface memory_repo) {
        this.shop = shop;
        this.notifier = notifier;
        this.repo = repo;
        this.memory_repo = memory_repo;
    }

    public void run() throws Exception {
        this.repo.save(this.shop);
        this.memory_repo.save(this.shop, 'shop_hash_blueprint');
        this.notifier.send(this.shop);
    }

    public static void main(String[] args) {
        try {
            AbstractShop shop = this.createShopByArgument(args[0], args[1], args[2], args[3]);

            WebinarShop app = new WebinarShop(
                shop,
                new ShopWhatsappNotifier(),
                new ShopSQLPersistence(),
                new ShopRedisPersistence()
            );

            app.run();
        } catch (Exception e) {
            return System.out.println("Runtime execution error");
        }
    }

    private AbstractShop createShopByArgument(String shop, String shop_type, String name, Integer phone) throws Exception {
        switch (shop) {
            case "mini":
                return new MiniShop(name, phone);
            case "standard":
                ShopTypeInterface type = this.createShopTypeByArgument(shop_type);
                return new StandardShop(name, phone, type);
            default:
                throw new Exception("Unknown shop");
        }
    }

    private ShopTypeInterface createShopTypeByArgument(String shop_type) {

        switch (shop_type) {
            case "supermarket":
                return new SuperMarket();
            case "toystore":
                return new ToyStore();
            default:
                return new NullShopType();
        }
    }
}
