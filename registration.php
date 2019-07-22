<?php
  
    session_start();
    header('location:login.php');

    $con = mysqli_connect('localhost:8080','root','1234');

    mysqli_select_db($con,'userRegistration');

    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $usrnm = $_POST['User'];
    $pass = $_POST['Password'];
    $type = $_POST['type'];
 
    $s = "select * from table regTable where Username = '$usrnm'";
    $p = "select * from table regTable where Email = '$email'";

    $result1 = mysqli_query($con,$s);
    $result2 = mysqli_query($con,$p);

    $num1 = mysqli_num_rows($result1);
    $num2 = mysqli_num_rows($result2);


    if($num1 == 1){
         echo "Username Already Taken";
    }else{
    	if($num2 == 1){
    		echo "Email already exists";
    	}else{
    		$reg = " insert into regTable(Name,Email,Username,Password,type) values ('$name','$email','$usrnm','$pass','$type')";
    		mysqli_query($con,$reg);
    		echo "Registration Successful!";
    	}
    }

?>