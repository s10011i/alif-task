
<?php include 'inc/header.php'; ?>  
    <section class="main-container">
        <div class="main-wrapper">
            <h2>Sign Up</h2>
            <form action="<?php echo ROOT_URL; ?>signup_check.php" method="post" class="signup-form">
                <input type="text" name="phone_num" placeholder="Phone_num">
                <input type="text" name="email" placeholder="E-mail">
                <input type="password" name="password" placeholder="Password">
                <button type="submit" name="submit">Sign Up</button>
            </form>
        </div>
    </section>
<?php include 'inc/footer.php'; ?> 