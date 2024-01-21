<?php
include'config.php';
if(isset($_POST['submit'])){
	echo"<pre>";
	print_r($_POST);
	echo"</pre>";
	
	$name = $_POST['name'];
	$number = $_POST['number'];
	$address = $_POST['address'];
	$pincode = $_POST['pincode'];
	$payment = $_POST['payment'];
	// $password = $_POST['password'];
	

	
	$sql = "INSERT INTO hunger(name,number,address,pincode,payment)
			VALUES('".$name."','".$number."','".$address."','".$pincode."','".$payment."')";
			
			if($conn->query($sql)===TRUE){
				
				
				echo'<script>
         alert("Inserted succesfully");
         window.open("index.php");
         </script>';
				
			}else{
				echo"error:".$sql."<br>".$conn->error;
			}
			$conn->close();
}

?>
