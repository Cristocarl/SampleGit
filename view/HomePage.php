<?php
include_once 'Header.php';
?>
<html>
<body>
<div class="adjust">
    <link rel="stylesheet" type="text/css" href="/view/style.css">
    <?php
    foreach ($Result as $r => $value1){
        $product_id        = $value1["product_id"];
        $product_name      = $value1["product_name"];
        $product_thumbnail = $value1["product_thumbnail"];
        $product_desc      = $value1["product_desc"];
        $Price             = $value1['price'];
        $Stock             = $value1['stock_qty'];
        ?>
        <div class="ul">
            <form action=""></form>
            <ol>
                <p hidden><strong>Product Id:</strong> <?=$product_id?></p>
                <p><strong>Product Name:</strong> <?= $product_name?></p>
                <p><strong>Product Description:</strong><?= $product_desc ?></p>
                <p><a class="img-thumbnail" href="/ProductDetails/<?=$product_id?>"><img src="<?= $product_thumbnail ?>" alt=""></a><br></p>
                <p><strong>UnitPrice:</strong><?= $Price ?></p>
                <p><strong>Stock: </strong><?= $Stock ?></p><br><br>
            </ol>
        </div>
        <?php
    }?>

</div>
</body>
</html>
