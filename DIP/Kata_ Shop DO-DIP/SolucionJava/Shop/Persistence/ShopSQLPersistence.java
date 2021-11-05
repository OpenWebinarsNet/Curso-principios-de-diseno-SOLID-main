package SolucionJava.Shop.Persistence;

public class ShopSQLPersistence implements ShopPersistenceInterface{
    //private SQLPersistence persistence;

    public ShopSQLPersistence(){
        //this.persistence = new SQLPersistence();
    }

    public void save(MiniShop shop){
        // Statement stmt = this.persistence.prepareQuery("INSERT INTO shops VALUES (?, ?)");
        // stmt.setString(1, shop.getName());
        // stmt.setInteger(2, shop.getPhone());
        // stmt.execute();
    }
}
