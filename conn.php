<?php
include 'dbconfig.php';
$conn = OpenCon();
echo "Connected Successfully";
CloseCon($conn);
?>