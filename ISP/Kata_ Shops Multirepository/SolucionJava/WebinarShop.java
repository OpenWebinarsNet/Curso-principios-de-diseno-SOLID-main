package SolucionJava;

import SolucionJava.*;

public class WebinarShop {
    private MiniShop shop;
    private NotifierInterface notifier;
    private ShopSQLPersistenceInterface repo;
    private ShopRedisPersistenceInterface memory_repo;

    public WebinarShop(MiniShop shop, NotifierInterface notifier, ShopSQLPersistenceInterface repo, ShopRedisPersistenceInterface memory_repo) {
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

    public static void main(String[] args){

        WebinarShop app = new WebinarShop(
            new MiniShop("sample_name", 600100001),
            new ShopWhatsappNotifier(),
            new ShopSQLPersistence(),
            new ShopRedisPersistence()
        );

        app.run();
    }
}
