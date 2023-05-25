<?php
	session_start();
	$db = mysqli_connect('localhost','root','','iconstock_db');
	if(!$db)
	{
		echo "not Connect";
	} 
	//Icon fillter
	if(isset($_POST['filtersm']))
	{
		$s = $_POST['select'];
//style
		if($s=="Lined")
		{
			$style ="l"; 
		}
		if($s=="Filled")
		{
			$style ="f"; 
		}
		if($s=="Colored")
		{
			$style ="c"; 
		}
       header('location:social-media.php?style='.$style);
	}

	if(isset($_POST['filtershape']))
	{
		$s = $_POST['select'];
//style
		if($s=="Lined")
		{
			$style ="l"; 
		}
		if($s=="Filled")
		{
			$style ="f"; 
		}
		if($s=="Colored")
		{
			$style ="c"; 
		}
       header('location:shape.php?style='.$style);
	}

	if(isset($_POST['filterarrow']))
	{
		$s = $_POST['select'];
//style
		if($s=="Lined")
		{
			$style ="l"; 
		}
		if($s=="Filled")
		{
			$style ="f"; 
		}
		if($s=="Colored")
		{
			$style ="c"; 
		}
       header('location:arrow.php?style='.$style);
	}

	if(isset($_POST['filtereco']))
	{
		$s = $_POST['select'];
//style
		if($s=="Lined")
		{
			$style ="l"; 
		}
		if($s=="Filled")
		{
			$style ="f"; 
		}
		if($s=="Colored")
		{
			$style ="c"; 
		}
       header('location:ecommerce.php?style='.$style);
	}

	if(isset($_POST['filterdb']))
	{
		$s = $_POST['select'];
//style
		if($s=="Lined")
		{
			$style ="l"; 
		}
		if($s=="Filled")
		{
			$style ="f"; 
		}
		if($s=="Colored")
		{
			$style ="c"; 
		}
       header('location:database.php?style='.$style);
	}

	if(isset($_POST['filterfile']))
	{
		$s = $_POST['select'];
//style
		if($s=="Lined")
		{
			$style ="l"; 
		}
		if($s=="Filled")
		{
			$style ="f"; 
		}
		if($s=="Colored")
		{
			$style ="c"; 
		}
       header('location:file.php?style='.$style);
	}
	

	if(isset($_POST['filteracc']))
	{
		$s = $_POST['select'];
//style
		if($s=="Lined")
		{
			$style ="l"; 
		}
		if($s=="Filled")
		{
			$style ="f"; 
		}
		if($s=="Colored")
		{
			$style ="c"; 
		}
       header('location:accessories.php?style='.$style);
	}

	if(isset($_POST['filterfood']))
	{
		$s = $_POST['select'];
//style
		if($s=="Lined")
		{
			$style ="l"; 
		}
		if($s=="Filled")
		{
			$style ="f"; 
		}
		if($s=="Colored")
		{
			$style ="c"; 
		}
       header('location:food.php?style='.$style);
	}

	if(isset($_POST['filters']))
	{
		$s = $_POST['select'];
//style
		if($s=="Lined")
		{
			$style ="l"; 
		}
		if($s=="Filled")
		{
			$style ="f"; 
		}
		if($s=="Colored")
		{
			$style ="c"; 
		}
       header('location:static_product.php?style='.$style);
	}

	if(isset($_POST['filtera']))
	{
		$s = $_POST['select'];
//style
		if($s=="Lined")
		{
			$style ="l"; 
		}
		if($s=="Filled")
		{
			$style ="f"; 
		}
		if($s=="Colored")
		{
			$style ="c"; 
		}
       header('location:animated_product.php?style='.$style);
	}

?>