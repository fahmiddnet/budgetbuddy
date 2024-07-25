<?php session_start(); if($_SESSION['id'] && $_SESSION['email']){ ?>
<?php 
    include('layout/header.php'); 
    include('functions/input_chack_fun.php'); 
    $user_id = $_SESSION['id']; 
    $sql = "SELECT * FROM user WHERE id = '$user_id'";
    $user_data = userData($sql);
    $name = $user_data['full_name'];
    $email = $user_data['email'];
    $user_name = $user_data['user_name'];
?>


<?php include('layout/footer.php'); ?>

<?php }else { header('location:login.php');} ?>