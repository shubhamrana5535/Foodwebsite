<?php
session_start();
include'config.php';
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];


    $query ="SELECT* FROM member WHERE email='$email' && password='$password'";

    $data = mysqli_query($conn,$query);
    $res = mysqli_num_rows($data);
    $row = mysqli_fetch_assoc($data);

    if($row['email']==$email && $row['password']==$password){
        echo"loging in";
       echo $_SESSION['email']=$row['email'];
       echo $_SESSION['password']=$row['password'];
       header("location:next.php");
       exit();
    }
    else{
        echo"login errror";
    }
}

?>
