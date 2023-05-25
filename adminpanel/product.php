
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

	$q= "select * from item";

	$result = mysqli_query($con,$q);

	if (mysqli_num_rows($result)>0) 
	{
		echo "<table>";
		echo "<tr>";
		echo "<th></th>";
		echo "<th>ID</th>";
		echo "<th>Name</th>";
		echo "<th>Image</th>";
		echo "<th>Category</th>";
		echo "<th>type</th>";
		echo "<th>Developer</th>";
		$i = 0;
		while ($row=mysqli_fetch_assoc($result)) 
		{
			echo "<tr>";
		?>
			<form action="delete.php" method="post">
				<input type="hidden" name="product_id" value="<?php echo $row['i_id']; ?>">
				<td>
					<input type="submit" name="btn_delete" class="btn" value="DELETE" style="background-color: #000080;" />
				</td>
			</form>
		<?php
			$i = $i + 1;
			echo "<td>".$i."</td>";
			echo "<td>".$row["i_name"]."</td>";
			echo "<td><img name='img-nm' style='object-fit: contain;' src='../images/".$row["i_img"]."'></td>";
			echo "<td>".$row["i_cat"]."</td>";
			echo "<td>".$row["i_type"]."</td>";
			echo "<td>".$row["dev_name"]."</td>";
		}
	}

	mysqli_close($con);
?>

</body>
</html>