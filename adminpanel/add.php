<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/add.css">
</head>
<body background="../images/bg_bggenerator_com1.png">
<h2>Add New Product</h2>

<form id="form" action="insert.php" method="post" style="height: 650px;">

    <label>Item Name : </label>
    <input type="text" name="i_name">
    <br>
  
    <label>Item Image :</label>
    <input id="img-upload" name="i_img" type="file" onchange="loadFile(event)">
    <br><br>
    <img class="pro-image" id="output" src="../images/imgpre.png" alt="Image Preview">
    <br><br>
  
    <label>Item Type : </label>
    <select name="i_type">
      <option>Static</option>
      <option>Animated</option>
    </select>
    <br>

    <label>Item Style : </label>
    <select name="i_style">
      <option>Filled</option>
      <option>Colored</option>
      <option>Lined</option>
    </select>
    <br>

    <label>Item Category : </label>
    <select name="i_cat">
      <option>Social Media Icons</option>
      <option>Shape Icons</option>
      <option>Arrow Icons</option>
      <option>Ecommerce Icons</option>
      <option>Database Icons</option>
      <option>File Icons</option>
      <option>Accessories Icons</option>
      <option>Food Icons</option>
    </select>
    <br>

    <label>Description</label>
    <textarea name="i_desc"></textarea>
    <br>
    <br><br>
    
    <input id="add" type="submit" name="add" value="Add">
   
    <button id="cancle" onclick="clear()">Cancle</button>
</form>

<!-- <form style="height: 1520px;" id="form" action="insert.php" method="post" style="height: 900px;">
	<label>Id</label>
	<input type="text" name="p_id" placeholder="Id is auto increment.." >
	<br>
	<label>Name</label>
	<input type="text" name="p_name">
	<br>
	<label>Image 1</label>
	<input style="margin-right: 60px;" id="img-upload" name="p_img" type="file" onchange="loadFile(event)">
	<br><br>
	<img class="pro-image" id="output" src="../images/imgpre.png" alt="Image Preview">
	<br><br>
  <label>Price</label>
  <input type="text" name="price">
 	<br>
  <label>Quantity</label>
  <input type="number" name="quantity">
 	<br>
  <label>Type</label>
  <select name="p_type">
  	<option>surgical</option>
  	<option>higenic</option>
  	<option>medicine</option>
  </select>
  <br>
  <label>Description</label>
  <textarea name="p_desc"></textarea>
  <br>
  <br><br>
  <input id="add" type="submit" name="add" value="Add">
  <button id="cancle" onclick="clear()">Cancle</button>
</form> 			
 -->
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