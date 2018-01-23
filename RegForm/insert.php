<?php

 include 'connect.inc.php';

 $usn = $_POST['username'];
 $email = $_POST['email'];
 $pass =  $_POST['pass'];
 $cpass = $_POST['cpass'];


 $fname = $_POST['f_name'];
 $lname = $_POST['l_name'];
 $cnumber = $_POST['c_number'];
 $address= $_POST['address'];
 $city= $_POST['city'];
 $state= $_POST['state'];
 $zip= $_POST['zip'];






if (empty($usn)){
  header("Location: registration.php?error=empty");  
    exit();
}if (empty($email)){
  header("Location: registration.php?error=empty");  
    exit();
}if (empty($pass)){
  header("Location: registration.php?error=empty");  
    exit();
}if (empty($cpass)){
  header("Location: registration.php?error=empty");  
    exit();
}if (empty($fname)){
  header("Location: registration.php?error=empty");  
    exit();
}if (empty($lname)){
  header("Location: registration.php?error=empty"); 
    
    exit();
}if (empty($cnumber)){
  header("Location: registration.php?error=empty"); 
    exit();
    
}if (empty($address)){
  header("Location: registration.php?error=empty"); 
    exit();
}if (empty($city)){
  header("Location: registration.php?error=empty");  
    exit();
}if (empty($state)){
  header("Location: registration.php?error=empty");   
    exit();  
}if (empty($zip)){
  header("Location: registration.php?error=empty");  
    exit();
}else{
   $sql1 = "INSERT INTO accountinfo (Username,Email,pw,confps,Fname,Lname,Cnum,Adrss,City,State,Zp) VALUES ('$usn','$email', '$pass','$cpass','$fname','$lname', '$cnumber','$address','$city','$state', '$zip')";
    $result = $conn -> query($sql1);
    
   header("Location: registration.php?error=empty"); 
    
    
    
}
?>