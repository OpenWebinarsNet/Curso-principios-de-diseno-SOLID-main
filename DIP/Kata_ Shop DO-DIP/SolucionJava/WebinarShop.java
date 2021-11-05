package SolucionJava;

import SolucionJava.*;

public class WebinarShop {
    private MiniShop shop;
    private NotifierInterface notifier;
    private ShopPersistenceInterface repo;

    public WebinarShop(MiniShop shop, NotifierInterface notifier, ShopPersistenceInterface repo) {
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
            new ShopWhatsappNotifier(),
            new ShopSQLPersistence()
        );

        app.run();
    }
}
