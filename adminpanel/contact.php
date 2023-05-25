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


	$q= "select * from contact_us";

	$result = mysqli_query($con,$q);

	if (mysqli_num_rows($result)>0) 
	{
		echo "<table>";
		echo "<tr>";
		echo "<th>User ID</th>";
		echo "<th>Name</th>";
		echo "<th>Email</th>";
		echo "<th>Message</th>";
		
		$i = 0;
		while ($row=mysqli_fetch_assoc($result)) 
		{

			echo "<tr>";
			?>

		<!-- <form action="contact.php" method="post">
				<input type="hidden" name="product_id" value="<?php echo $row['i_id']; ?>">
				<td>
					<input type="submit" name="btn_reply" class="btn" value="Reply" style="background-color: #000080;" />
				</td>
			</form> -->

		<?php
			$i = $i + 1;
			echo "<td>".$i."</td>";
			echo "<td>".$row["name"]."</td>";
			echo "<td>".$row["email"]."</td>";
			echo "<td>".$row["message"]."</td>";
		}
	}

	mysqli_close($con);
?>

</body>
</html>