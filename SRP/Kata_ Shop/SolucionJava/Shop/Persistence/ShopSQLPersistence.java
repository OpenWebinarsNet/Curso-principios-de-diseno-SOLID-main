package SolucionJava.Shop.Persistence;

public class ShopSQLPersistence {
    private Shop shop;
    //private SQLPersistence persistence;

    public ShopSQLPersistence(Shop shop){
        this.shop = shop;
        //this.persistence = new SQLPersistence();
    }

    public void save(){
        // Statement stmt = this.persistence.prepareQuery("INSERT INTO shops VALUES (?, ?)");
        // stmt.setString(1, this.shop.getName());
        // stmt.setInteger(2, this.shop.getPhone());
        // stmt.execute();
    }
}
