<?php
include 'config.php';
// print_r($_GET);
  $id = $_GET['id'];
  $query = mysqli_query($conn, "DELETE FROM hunger WHERE id=$id");

    if ($query == 1) {
   header('location: next.php');
} else {
  echo "Error updating record: ";
}
    

?>