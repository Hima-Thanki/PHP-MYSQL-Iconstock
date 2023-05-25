<?php

	session_start();

	$con = mysqli_connect('localhost','root','','covictory');
	$id=$_POST['product_id'];
	$query = "select * from product where p_id=$id";	
	$result = mysqli_query($con,$query);
	$row=mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/edit.css">
</head>
<body background="../images/bg_bggenerator_com1.png">
<h2>Edit Product</h2>
<form id="form" action="update.php" method="post">
	<label>Id</label>
	<input type="text" name="id" value="<?php echo $row['p_id'];?>" disabled>
	<br>
	<label>Name</label>
	<input type="text" name="p_name" value="<?php echo $row['p_name'];?>">
	<br>
	<label>Image 1</label>
	<input style="margin-right: 60px;" id="img-upload" type="file" name="p_img" value="<?php echo $row['p_img'];?>" onchange="loadFile(event)">
	<br><br>
	<img class="pro-image" id="output" src="../images/<?php echo $row['p_img'];?>">
	<br>
	<label>Image 2</label>
	<input style="margin-right: 60px;" id="img-upload" type="file" name="p_img2" value="../images/<?php echo $row['p_img2'];?>" onchange="loadFile1(event)">
	<br><br>
	<img class="pro-image" id="output1" src="../images/<?php echo $row['p_img2'];?>">
	<br>
	<label>Image 3</label>
	<input style="margin-right: 60px;" id="img-upload" type="file" name="p_img3" value="../images/<?php echo $row['p_img3'];?>" onchange="loadFile2(event)">
	<br><br>
	<img class="pro-image" id="output2" src="../images/<?php echo $row['p_img3'];?>">
	<br>
  <label>Price</label>
  <input type="text" name="price" value="<?php echo $row['price'];?>">
 	<br>
  <label>Quantity</label>
  <input type="number" name="quantity" value="<?php echo $row['quantity'];?>">
 	<br>
  <label>Type</label>
  <select name="p_type">
  	<option value="Medicine">Medicine</option>
  	<option value="Surgical">Surgical</option>
  	<option value="Higenic">Higenic</option>
  </select>
  <br>
  <label>Description</label>
  <textarea name="p_desc" id="editor"><?php echo $row['p_desc'];?></textarea>
  <br>
  <br><br>
  <input type="hidden" name="id" value="<?php echo $row['p_id']; ?>">
  <input id="edit" type="submit" name="edit" value="Edit">
  <button id="cancle" onclick="clear()">Cancle</button>
</form> 			

	<script>
		var loadFile = function(event)
		{
			var output = document.getElementById('output');
			output.src = URL.createObjectURL(event.target.files[0]);
			output.onload = function()
			{
				URL.revokeObjectURL(output.src)
			}
		};

		function clear()
		{
			document.getElementById("form").reset();
		}

		var loadFile1 = function(event)
		{
			var output1 = document.getElementById('output1');
			output1.src = URL.createObjectURL(event.target.files[0]);
			output1.onload = function()
			{
				URL.revokeObjectURL(output1.src)
			}
		};

		var loadFile2 = function(event)
		{
			var output2 = document.getElementById('output2');
			output2.src = URL.createObjectURL(event.target.files[0]);
			output2.onload = function()
			{
				URL.revokeObjectURL(output2.src)
			}
		};
	</script>
</body>
</html>