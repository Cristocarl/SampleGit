<?php
include_once'model/ProductDetails.php';


class ProductController
{
    public function display_product($product_id)
    {
        $display = new ProductDetails();
        $Result  = $display->displayProductDetails($product_id);
        include 'view/ProductDetails.php';
    }
}
?>