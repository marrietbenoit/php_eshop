<?php
include("header.php");

?>
<section>

<div>
<?php 

session_start();
$_SESSION['dataOfProducts'] = [
    "product1" => [
        "productName" => "finePoint_pen",
        "productPrice" => 190,
        "productPic" => "finepoint.jpeg",
        "productDescription" => "Lorem ipsum dolor sit amet coonsectetur adipisicing elit.
        Libero sunt soluta facilis itaque doloremque eaque nulla minus reiciendis voluptatum!
        Necessitatibus ratione ad explicabo reprehenderit distintio doloremque? sunt id dolorum laudantium."
    ] ,
 "product2" => [
    "productName" => "fountaine_pen",
    "productPrice" => 250,
    "productPic" => "fountaine.jpeg",
    "productDescription" => "Lorem ipsum dolor sit amet coonsectetur adipisicing elit.
    Libero sunt soluta facilis itaque doloremque eaque nulla minus reiciendis voluptatum!
    Necessitatibus ratione ad explicabo reprehenderit distintio doloremque? sunt id dolorum laudantium."
] ,
 "product3" => [
    "productName" => "ballPoint_pen",
    "productPrice" => 125,
    "productPic" => "ballpiont.jpeg",
    "productDescription" => "Lorem ipsum dolor sit amet coonsectetur adipisicing elit.
    Libero sunt soluta facilis itaque doloremque eaque nulla minus reiciendis voluptatum!
    Necessitatibus ratione ad explicabo reprehenderit distintio doloremque? sunt id dolorum laudantium."
] ,
];

?>
</div>

<div style="display: flex;">
<?php foreach ($_SESSION['dataOfProducts'] as $key => $productInfo) : ?>
<div class="card">
<img src="./images/<?php echo $productInfo['productPic'] ?>" "class="card-img-top" alt="...">
<div class="card-body">
<h5 class="card-title"><?php echo $productInfo['productName']?></h5>
<p class="card-text"><?php echo $productInfo['productDescription']?></p>
<form action="./product_detail.php" method="GET">
    <input name='key' type="hidden" value="<?php echo $key ?>" >
    <button type="submit">more</button>
</form>
</div>
</div>
<?php endforeach?>
</div>
</section>

<?php
include("footer.php");
?>
