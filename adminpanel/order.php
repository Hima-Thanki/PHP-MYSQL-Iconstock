
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body background="../images/bg_bggenerator_com.png">
<?php

	$con = mysqli_connect('localhost','root','','iconstock_db');

	if (!$con) 
	{
		die("connection failed..");
	}

	$q= "select * from user where u_type='d'";

	$result = mysqli_query($con,$q);

	if (mysqli_num_rows($result)>0) 
	{
		echo "<table>";
		echo "<tr>";
		echo "<th></th>";
		echo "<th>ID</th>";
		echo "<th>Name</th>";
		echo "<th>Email</th>";
		echo "<th>Mobile no.</th>";
		$i = 0;
		while ($row=mysqli_fetch_assoc($result)) 
		{
			echo "<tr>";
		?>
			<form action="delete.php" method="post">
				<input type="hidden" name="developer_id" value="<?php echo $row['reg_id']; ?>">
				<td>
					<input type="submit" name="btn_delete" class="btn" value="DELETE" style="background-color: #000080;" />
				</td>
			</form>
		<?php
			$i = $i + 1;
			echo "<td>".$i."</td>";
			echo "<td>".$row["name"]."</td>";
			echo "<td>".$row["email"]."</td>";
			echo "<td>".$row["mobile_no"]."</td>";
		}
	}

	mysqli_close($con);
?>

</body>
</html>