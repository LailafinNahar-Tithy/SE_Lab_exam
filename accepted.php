

<?PHP
include("dbconfig.php");

?>

<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    
    <title>ACC_REJ</title>
  </head>
  <body>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">EMPLOYEE_NAME</th>
      <th scope="col">START</th>
      <th scope="col">END</th>
      <th scope="col">STATUS</th>
      <th scope="col">REMARKS</th>
    </tr>
  </thead>
  <?php
  $sql="SELECT * FROM leave_entry";
  $result = mysqli_query($conn, $sql);
  while ($row = mysqli_fetch_array($result)) {
   $id=$row['ID'];
  
  ?>

  <tbody>
    <tr>
      <th><?php echo$row['ID']  ?> </th>
      <td><?php echo$row['EMPLOYEE_NAME']  ?></td>
      <td><?php echo$row['LEAVE_START']  ?></td>
      <td><?php echo$row['LEAVE_END']  ?></td>
      <td><?php echo$row['STATUS']  ?></td>
      <td><?php echo$row['REMARKS']  ?></td>
     
      <td> <?php echo"<a href='ass.php?id=$id'><button type='button' class='btn btn-success'>Accepted</button></a></td>" ?>
      

    </tr>
    
  </tbody>
  <?php } ?>


</table>

</body>
</html>