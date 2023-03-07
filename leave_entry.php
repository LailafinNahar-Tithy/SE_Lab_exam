<?php

include("dbconfig.php");


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id=$_POST["name"];
    $number=$_POST["num"];
   
    
   $sql="DELETE FROM `request_class` WHERE SL='$id'";
   mysqli_query($conn, $sql);
   
   header("location: leave_input.php");

}


?>