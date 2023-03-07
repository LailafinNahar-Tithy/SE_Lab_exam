<?php

include("dbconfig.php");


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name=$_POST["name"];
    $start=$_POST["start"];
    $end=$_POST["end"]; 
    $from=$_POST["status"];
    
   $sql="INSERT INTO `leave_entry`( `EMPLOYEE_NAME`, `LEAVE_START`, `LEAVE_END`, `STATUS`, `REMARKS`) VALUES ('$name','$start','$end','Panding','$from')";
   mysqli_query($conn, $sql);
   
   

}


?>