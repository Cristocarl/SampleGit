<?php
include_once 'Header.php';

?>
<link rel="stylesheet" type="text/css" href="/view/style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
      integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<table class="table">
    <tr>
        <td>Product</td>
        <td>Quantity</td>
        <td>Price</td>
    </tr>
    <tr>
        <td><?= $Result['product_id']?></td>
        <td><img src="<?= $Result['product_image']?>" alt=""></td>
        <td><?= $Result['qty']?></td>
        <td><?= $Result['price']?></td>
    </tr>
</table>
<table>
    <p><strong>Shipping Total: </strong><?= $Result['shipping_total']?></p>
    <p><strong>Sub Total: </strong><?= $Result['sub_total']?></p>
    <button>check out</button>
</table>