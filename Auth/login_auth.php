<?php 
    session_start();
    include('../DB/db_config.php');
    include('../functions/input_chack_fun.php');

    if(isset($_POST['email']) && $_POST['password']){
        $user_email = check_input($_POST['email']);
        $user_password = check_input($_POST["password"]);
    }

    if(empty($user_email)){
        header('location: ../login.php?erUn');
        exit();
    } else if (empty($user_password)) {
        header('location: ../login.php?errPs');
        exit();
    } else {
        $sql = "SELECT * FROM user WHERE email = '$user_email' AND user_password = '$user_password'";
        $result = mysqli_query($conn,$sql);
        // print_r($result);
        if(mysqli_num_rows($result) > 0){
                $row = mysqli_fetch_assoc($result);
                // print_r($row);
                $_SESSION['id'] = $row['id'];
                $_SESSION['full_name'] = $row['full_name'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['user_name'] = $row['user_name'];
                header("location: ../index.php");
                exit();
        }else {
            header("location: ../login.php?notMatchEmail_pass");
            exit();
        }
    }
?>