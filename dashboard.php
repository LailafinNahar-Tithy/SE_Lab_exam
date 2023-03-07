<?PHP
include("dbconfig.php");

  $sql="SELECT * FROM leave_entry";
  $result = mysqli_query($conn, $sql);
  while ($row = mysqli_fetch_array($result)) {
  }
   

  ?>



<!DOCTYPE html>
<html>
<head>
	<title>Index page</title>
	<style>
		table {
			border-collapse: collapse;
			width: 100%;
		}
		th, td {
			padding: 8px;
			text-align: left;
			border-bottom: 1px solid #ddd;
		}
		th {
			background-color: #f2f2f2;
		}
	</style>
</head>
<body>

	<h2>Dashboard</h2>

	<table>
		<thead>
			<tr>
				<th>ID</th>
				<th>EMPLOYEE_Name</th>
				<th>LEAVE_START</th>
				<th>LEAVE_END</th>
				<th>STATUS</th>
				<th>REMARKS</th>
			</tr>
		</thead>
		
  
    <tbody>
			
			<?php
				
				if(isset($_POST['add'])) {
					echo "<tr>";
					echo "<td>1</td>";
					echo "<td>Tithy</td>";
					echo "<td>02-02-23</td>";
					echo "<td>03-04-23</td>";
					echo "<td>Pending</td>";
					echo "<td>remarks</td>";
					echo "</tr>";
				}
			?>
			<tr>
				<td colspan="6">
					<form method="post">
						<button type="submit" name="add">Add</button>
						<button type="button" name="cancel">Cancel</button>
					</form>
				</td>
			</tr>
		</tbody>
	</table>

</body>
</html>