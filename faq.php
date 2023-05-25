<?php
	session_start();

	$db = mysqli_connect('localhost','root','','iconstock_db');

	if(!$db)
	{
		echo "not Connect";
	} 

	//question

	if(isset($_POST['q_btn']))
	{
		$question = $_POST['question'];
		$unm = $_SESSION['username'];

		$query1 = mysqli_query($db,"select reg_id from user where username= '".$unm."'");    
        $row1 = mysqli_fetch_row($query1);

        $uid = $row1[0];
		mysqli_query($db,"insert into forum_q(uid,question) values(".$uid.",'".$question."')");
		header('location:forum.php');
	}

	if(isset($_POST['ans_btn']))
	{
		$answer = $_POST['answer'];
		$qid = $_GET['qid'];
		$unm = $_SESSION['username'];		

		$query1 = mysqli_query($db,"select reg_id from user where username= '".$unm."'");    
        $row1 = mysqli_fetch_row($query1);

        $uid = $row1[0];
		mysqli_query($db,"insert into forum_answer(que_id,uid,answer) values(".$qid.",".$uid.",'".$answer."')");
		header('location:message.php?qid='.$qid);
	}
?>