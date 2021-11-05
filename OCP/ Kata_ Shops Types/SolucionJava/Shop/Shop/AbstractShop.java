package SolucionJava.Shop.Shop;

public abstract class AbstractShop {
    protected String name;
    protected Integer phone;

    public AbstractShop(String name, Integer phone){
        this.name = name;
        this.phone = phone;
    }

    public String getName(){
        return this.name;
    }

    public Integer getPhone(){
        return this.phone;
    }
}
