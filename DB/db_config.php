<?php
     $dbhost = 'localhost';
     $dbuser = 'root';
     $dbpass = '';
     $dbname = 'budget_buddy';
     $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);

     if(! $conn ){
        //die('Could not connect: ' . mysqli_error());
        echo 'Could not connect to database ';
     }

    //  echo 'Connected successfully';
  ?>