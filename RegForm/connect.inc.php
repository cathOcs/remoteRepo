<?php
    $conn = mysqli_connect("localhost", "root", "", "registration");
        if(!$conn){
            die("Connection is failed: ".mysqli_connect_error);
        }else{
            #echo 'Connected Successfully';
        }
?>