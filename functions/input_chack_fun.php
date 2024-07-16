<?php 
function check_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function userData($sql){
  include('DB/db_config.php');
  $result = mysqli_query($conn,$sql);
  if(mysqli_num_rows($result) > 0 ){
    $row = mysqli_fetch_assoc($result);
  }
  return $row;
}

  
?>