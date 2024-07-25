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
            <div class="card-header">
                <h3 class="card-title m-0 me-2"><?php echo $name ?> <span class="mx-2 fs-6"><i class='bx bx-location-plus'></i> dhaka,bangladesh</span></h3>
                <a href="#">Product manager</a>
            </div>
            <div class="card-body pb-2">
                <p class="text-title text-uppercase">Ranking</p>
                <div class="d-flex align-items-center gap-3 mb-3">
                    <span class="display-6 mb-0">4.0</span>
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
                        <!-- <img class="img-fluid" src="img/avatars/1.png" alt="profile"> -->
                    </div>
                </div>
            </div>
    </div>
    <div class="col-12 col-md-8 col-lg-8 mb-4">
        <div class="card h-100">
            <div class="card-header">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#timeline_panel" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Timeline</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">About</button>
                </li>
            </ul>
            </div>
            <div class="card-body pb-2">
                <div class="d-flex align-items-center gap-3 mb-3">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="timeline_panel" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                        <p>contact information</p>    
                            <ul>
                                <li>Name: </li>
                                <li>Phone: </li>
                                <li>Address: </li>
                                <li>birthdate: </li>
                                <li>Gender: </li>
                                <li>E-mail: </li>
                                <li>Site: </li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">...</div>
                        <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">...</div>
                        <div class="tab-pane fade" id="disabled-tab-pane" role="tabpanel" aria-labelledby="disabled-tab" tabindex="0">...</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('layout/footer.php'); ?>

<?php }else { header('location:login.php');} ?>