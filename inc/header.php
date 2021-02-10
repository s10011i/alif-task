<?php session_start(); ?>
<?php include 'config/connect.php'; ?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Alif Task</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav>
            <div class="main-wrapper">
                <ul>
                    <li><a href="index.php">Home</a></li>
                </ul>
                <div class="nav-login">
                    <?php
                        if (isset($_SESSION['email'])){
                            echo ' <form action="logout.php" method="post">
                                    <small>Welcome<i style="color:red"> '.$_SESSION['email'].'</i></small>
                                    <button type="submit" name="submit">Logout</button>
                                </form>';
                        }else{
                            echo ' <form action="login_check.php" method="post">
                                    <input type="text" name="email" placeholder="Email">
                                    <input type="password" name="password" placeholder="Password">
                                    <button type="submit" name="submit">Login</button>
                                </form>';
                        }
                     ?>
                     <a href="<?php echo ROOT_URL ?>signup.php" class="btn btn-secondary">Sign Up</a>  
                </div>
            </div>
        </nav>
    </header>