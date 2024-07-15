<?php 
    if(isset($_POST['loginSubmit'])){
        $email = $_POST['email_username'];
        $user_password = $_POST['password'];
        echo $email;
        echo $user_password;
        header('location: ../index.php');
    }
?>