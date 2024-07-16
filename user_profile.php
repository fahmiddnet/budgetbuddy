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

<div class="row">
    <div class="col-12 col-md-4 col-lg-4 mb-4">
            <div class="card h-100">
                <div class="card-body d-flex align-item-center justify-content-center pb-2">
                    <div class="profile ">
                        <img class="img-fluid" src="img/avatars/1.png" alt="profile">
                    </div>
                </div>
            </div>
    </div>
    <div class="col-12 col-md-8 col-lg-8 mb-4">
        <div class="card h-100">
            <div class="card-header d-flex align-item-center">
                <h3 class="card-title m-0 me-2"><?php echo $name ?></h3>
                <p><i class='bx bx-location-plus' ></i> dhaka,bangladesh</p>
            </div>
            <div class="card-body pb-2">
                <div class="d-flex align-items-center gap-3 mb-3">
                    <h1 class="display-3 mb-0">4.0</h1>
                    <div class="ratings">
                        <i class="bx bxs-star bx-sm text-warning"></i>
                        <i class="bx bxs-star bx-sm text-warning"></i>
                        <i class="bx bxs-star bx-sm text-warning"></i>
                        <i class="bx bxs-star bx-sm text-warning"></i>
                        <i class="bx bxs-star bx-sm text-lighter"></i>
                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <span class="badge bg-label-primary me-3">+5.0</span>
                    <span>Points from last month</span>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12 col-md-4 col-lg-4 mb-4">
            <div class="card h-100">
                <div class="card-body d-flex align-item-center justify-content-center pb-2">
                    <div class="profile ">
                        <img class="img-fluid" src="img/avatars/1.png" alt="profile">
                    </div>
                </div>
            </div>
    </div>
    <div class="col-12 col-md-8 col-lg-8 mb-4">
        <div class="card h-100">
            <div class="card-header d-flex align-item-center">
                <h3 class="card-title m-0 me-2"><?php echo $name ?></h3>
                <p><i class='bx bx-location-plus' ></i> dhaka,bangladesh</p>
            </div>
            <div class="card-body pb-2">
                <div class="d-flex align-items-center gap-3 mb-3">
                    <h1 class="display-3 mb-0">4.0</h1>
                    <div class="ratings">
                        <i class="bx bxs-star bx-sm text-warning"></i>
                        <i class="bx bxs-star bx-sm text-warning"></i>
                        <i class="bx bxs-star bx-sm text-warning"></i>
                        <i class="bx bxs-star bx-sm text-warning"></i>
                        <i class="bx bxs-star bx-sm text-lighter"></i>
                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <span class="badge bg-label-primary me-3">+5.0</span>
                    <span>Points from last month</span>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('layout/footer.php'); ?>

<?php }else { header('location:login.php');} ?>