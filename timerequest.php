<?php
	session_start();
	$dates=$_POST['dates'];
	$times=$_POST['times'];
	$timew=$_POST['timew'];
	$uname=$_SESSION['uname'];
	

	$server="localhost";
	$username="root";
	$password="";
	$dbname="sleep_tracking";

	$conn=mysqli_connect($server,$username,$password,$dbname);
	if(!$conn) {
		echo 'Connection Failure';
	}

	$sql="INSERT INTO sleeplog (uname,dates,times,timew) VALUES ('".$uname."','".$dates."','".$times."','".$timew."')";

	$res=mysqli_query($conn,$sql);

	if($res) {
		echo 'Success';
	} else {
		echo $conn->error;
	}

?>