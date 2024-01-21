<?php

session_start();
include"config.php";
if(empty($_SESSION)){
    header("location:login.php");
}

$sql = "SELECT* FROM hunger";

$result = mysqli_query($conn,$sql);

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
   
    <link  rel="stylesheet" href="style.css">
    <title>Hello, world!</title>
  </head>
  <body >
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
        </nav>
       
       
 <div class="table1">
           <table border=5px >
            <thead>
                <tr>
                <th>Id</th><th>Name</th><th>Number</th><th>Address</th><th>Pincode</th><th>Payment</th><th>Update</th><th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php 
                    while($row = mysqli_fetch_array($result)){

                    ?>
                <td><?php echo $row['id'];?></td>
                <td><?php echo $row['name'];?></td>
                <td><?php echo $row['number'];?></td>
                <td><?php echo $row['address'];?></td>
                <td><?php echo $row['pincode'];?></td>
                <td><?php echo $row['payment'];?></td>
                <td><button style=" background-color: pink; font-family: 'Generic' ,cursive;"><a  href="update.php?id=<?php echo $row['id']; ?>">UPDATE</a></button></td>
                <td><button style=" background-color: pink; font-family: 'Generic' ,cursive;"><a  href="delete.php?id=<?php echo $row['id']; ?>">DELETE</a></button></td>
            </tr>
            <?php
                    }
                    ?>
            </tbody>
           </table>
           </div>
  
</form>
           
<div class="footer">
    <div class="txt">
        <h2>About Us</h2>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. !</p>
        <p>Service</p>
        <p>Coustmer</p>
        <p>Foods</p>
    </div>
    <div class="txt">
        <h2>About Us</h2>
        <p>Product</p>
        <p>Service</p>
        <p>Coustmer</p>
        <p>Foods</p>
    </div>   <div class="txt">
        <h2>About Us</h2>
        <p>Near</p>
        <p>Service</p>
        <p>Coustmer</p>
        <p>Foods</p>
    </div>   <div class="txt">
        <h2>About Us</h2>
        <p>Website</p>
        <p>Service</p>
        <p>Coustmer</p>
        <p>Foods</p>
    </div>

</div>
        
      
	
	</body>
	</html>
	


