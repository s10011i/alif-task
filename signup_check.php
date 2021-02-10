<?php
require 'config/connect.php';

if (isset($_POST['submit'])){
    $phone_num=htmlspecialchars($_POST['phone_num']);
    $email=htmlspecialchars($_POST['email']);
    $password=htmlspecialchars($_POST['password']);

    $phone_num=mysqli_real_escape_string($conn,$phone_num);
    $email=mysqli_real_escape_string($conn,$email);
    $password=mysqli_real_escape_string($conn,$password);
    if (!empty($phone_num)  && !empty($email) && !empty($password)){
        $query="INSERT INTO customers (phone_num,email,password) VALUES ('$phone_num','$email','$password')";
        // get result
        $result=mysqli_query($conn,$query);
        if ($result){
            header('Location: '.ROOT_URL.'');
        }else{
            echo 'ERROR: '.mysqli_error($conn);
        }  
    }else{
        header('Location: signup.php');
    }
}else{
    header('Location: signup.php');
}

?>