<?php

namespace model\Cart;
class Cart
{
    public function displaySelectedItems($product_id)
    {
        try {
            $sql = prepare("SELECT product_name,product_image,qty,cart_items.price,carts.shipping_total,carts.sub_total
                                                          FROM cart_items
                                                          JOIN products ON cart_items.product_id=products.product_id
                                                          JOIN carts ON carts.cart_id=cart_items.cart_id
                                                          WHERE cart_items.product_id='$product_id'"
            );
            $sql->execute();
            return $sql->fetch(PDO::FETCH_ASSOC);
        }catch (PDOException $e){
            print_r($e);exit;
        }
    }
}