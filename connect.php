<?php

    $mysqli = mysqli_connect("localhost","first_year","first_year","first_year");
    if (mysqli_connect_errno()){
        echo "failed to connect ".mysqli_connect_errno() ."??? ". mysqli_connect_error();
        exit();
    }
    else{
        echo "fine<br />";
    }
    ?>
