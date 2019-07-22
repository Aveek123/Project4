<?php
  
    session_start();

    $con = mysqli_connect('localhost:8080','root','1234');

    mysqli_select_db($con,'userRegistration');

    $usrnm = $_POST['User'];
    $pass = $_POST['Password'];
 
    $s = "select * from table regTable where Username = '$usrnm' && Password = '$pass'";

    $result = mysqli_query($con, $s);

    $num = mysqli_num_rows($result);


    if($num == 1){
        $_SESSION['Name'] = $usrnm;
        header('location:home.php');
    }else{
        header('location:login.php');
    }

?>