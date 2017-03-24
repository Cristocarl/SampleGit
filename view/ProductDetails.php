<?php
include_once 'Header.php';
?>
<link rel="stylesheet" type="text/css" href="/view/style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
      integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<div class="form-container">
    <form action="http://local.exercise2.com/Cart" method="post">
        <ol>
        <p hidden>Product Id: <?= $Result['product_id'].'<br>'?></p>
        <p><strong>Product Name:</strong> <?= $Result['product_name'].'<br>'?></p>
        <p><strong>Product Description:</strong> <?= $Result['product_desc'].'<br>'?></p>
        <strong><p>Price:</strong> <?= $Result['price']?></p>
        <p><img class="productImage" src="<?= $Result['product_image']?>" alt=""></p>
        <input type="hidden" name="product_id" value="<?= $_GET['product_id']?>"
        <strong>Quantity:</strong> <input  type="number" min="1" max="<?= $Result['stock_qty']?>" name="quantity" required="required" value="1"><br><br>
        <button class="btn-success" type="submit" value="submit">Add to Cart</button>
        </ol>
    </form>
</div>
</div>