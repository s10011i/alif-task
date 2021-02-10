
<?php include 'inc/header.php'; ?>  

    <section class="main-container">
        <div class="main-wrapper">
            <h2>Home</h2>
            <?php
            if (isset($_SESSION['email'])){
                header('Location: product.php');
                
            }
            ?>

        </div>
    </section>

<?php include 'inc/footer.php'; ?> 
