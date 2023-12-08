<?php

    $db = mysqli_connect('localhost',"root","","busbooking");
    
    if($db){
        // echo "Success";
    }
    else{
        die("Failed".mysqli_connect_error());
    }

?>