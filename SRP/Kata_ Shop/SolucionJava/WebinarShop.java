package SolucionJava;

import SolucionJava.*;

public class WebinarShop {
    private MiniShop shop;
    private ShopSmsNotifier notifier;
    private ShopSQLPersistence repo;

    public WebinarShop(MiniShop shop, ShopSmsNotifier notifier, ShopSQLPersistence repo) {
        this.shop = shop;
        this.notifier = notifier;
        this.repo = repo;
    }

    public void run() throws Exception {
        this.repo.save(this.shop);
        this.notifier.send(this.shop);
    }

    public static void main(String[] args){
        WebinarShop app = new WebinarShop(
            new MiniShop("sample_name", 600100001),
            new ShopSmsNotifier(),
            new ShopSQLPersistence()
        );

        app.run();
    }
}
