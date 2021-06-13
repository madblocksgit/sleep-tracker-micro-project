<?php
	
	$fullname=$_POST['fullname'];
	$uname=$_POST['uname'];
	$age=$_POST['age'];
	$gender=$_POST['gender'];
	$pwd=$_POST['pwd'];

	$server="localhost";
	$username="root";
	$password="";
	$dbname="sleep_tracking";

	$conn=mysqli_connect($server,$username,$password,$dbname);
	if(!$conn) {
		echo 'Connection Failure';
	}

	$sql="INSERT INTO login (fullname,uname,age,gender,pwd) VALUES ('".$fullname."','".$uname."','".$age."','".$gender."','".$pwd."')";

	$res=mysqli_query($conn,$sql);

	if($res) {
		echo 'Success';
	} else {
		echo $conn->error;
	}

?>