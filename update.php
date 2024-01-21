<?php
session_start();
include_once 'config.php';

        $id =$_GET['id'];
      if(isset($_POST['update'])){
		  echo"<pre>";
 print_r($_POST);
  echo"</pre>";
  $id =$_POST['id'];
  $name = $_POST['name'];
  //$image = $_POST['image'];
  $number =$_POST['number'];
  $address = $_POST['address'];
  $pincode = $_POST['pincode'];
//   $email = $_POST['email'];
//   $password = $_POST['password'];
   
  
  
  $query = mysqli_query($conn, "UPDATE hunger SET name='$name',number='$number',address='$address',pincode='$pincode' WHERE id= $id");
		
		if ($query == 1) {
   header('location: next.php');
} else {
  echo "Error updating record: ";
}
}

			$results = mysqli_query($conn,"SELECT * FROM hunger WHERE id= $id " );
$row1 = mysqli_fetch_array($results);
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link  rel="stylesheet" href="style.css">
<body>
<div class="container">
        <nav>
            <div class="logo">
                <h1>HUNGRY <span style="color: white;">POINT</span> </h1>
            </div>
            <!-- <div class="input">
                <input type="text" value="" placeholder="Search your special" id="inp"  onkeyup="myfun()">
                <i class="fa-brands fa-searchengin"></i>
            </div> -->
            <div class="logout">
                <!-- <i  onclick="login()" class="fa-solid fa-user">login</i> -->
                <!-- <i class="fa-solid fa-cart-shopping" ><a href="order.php">order</a></i> -->
                <!-- <i onclick="nav()" class="fa-solid fa-bars" ></i> -->
                <a href="logout.php">Logout</a>
            </div>
        </nav><br>
       

<form  action="update.php" method="POST" enctype="multipart/form-data" class="cart" style="padding: 80px;" >
<div class="logo" >
                <h1 style="color:black">UPDATE <span>DATA</span> </h1>
            </div>
 <input type="text" name="id" value="<?php echo $row1["id"]; ?>"><br>
<input type="text" name="name" value="<?php echo $row1["name"]; ?>" id="name" ><br>

<input type="text" name="number" value="<?php echo $row1["number"]; ?>" id="number" ><br>


<input type="text" name="address" value="<?php echo $row1["address"]; ?>" id="address" ><br>

<input type="text" name="pincode" value="<?php echo $row1["pincode"]; ?>" id="pincode" ><br>
 

<button  type="submit" name="update">View Data</button>
<!-- <button><a href="next.php" type="button"> Back</a></button>  -->


</form>

<?php

?>

