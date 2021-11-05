package SolucionJava.Shop.Notifier;

public class ShopEmailNotifier implements NotifierInterface {
    //EmailNotifier notifier;

    public ShopEmailNotifier() {
        //this.notifier = new EmailNotifier();
    }

    public void send(MiniShop shop) throws Exception {
        try {
            //String text = String.format("Your shop %s has been created", shop.getName());
            //this.notifier.send(text, shop.getPhone());
        } catch (Exception e) {
            // Log this fail
            throw new Exception("Something like wrong when trying to send notification");
        }
    }
}
