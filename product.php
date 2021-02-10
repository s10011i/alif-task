<?php include 'inc/header.php'; ?>
<?php
// create query
$query="SELECT * FROM products ";
// get result
$result=mysqli_query($conn,$query);  
// fetch the data
$products=mysqli_fetch_all($result,MYSQLI_ASSOC);
// free result
mysqli_free_result($result);
// close the connection
mysqli_close($conn);

?>   
<section class="main-container">
    <div class="main-wrapper">
        <h2 style="color:#6cb2eb">Products Page</h2>
            <?php foreach($products as $product):?>
                <div>
                    <img src="product-images/<?=$product['product_name']; ?>.jpg" alt="">
                    <h3><?=$product['product_name']; ?></h3>
                    <h4>Price:<?php echo $product['price']; ?></h4>
                    <a href="<?php echo ROOT_URL; ?>purchase.php?id=<?php echo $product['id']; ?>"><button>Purchase</button></a>
                </div>
                <hr>
            <?php endforeach;?>
    </div>
</section>

<?php include 'inc/footer.php'; ?> 