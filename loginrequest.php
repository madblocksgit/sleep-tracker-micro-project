<?php
	session_start();
	$uname=$_POST['uname'];
	$pwd=$_POST['pwd'];

	$server="localhost";
	$username="root";
	$password="";
	$dbname="sleep_tracking";
	$flag=0;
	$conn=mysqli_connect($server,$username,$password,$dbname);
	if(!$conn) {
		echo 'Connection Failure';
	}

	$sql="SELECT * from login";

	$data=mysqli_query($conn,$sql);

	while($row=mysqli_fetch_assoc($data)) {

		if($row['uname']==$uname && $row['pwd']==$pwd) {
			echo 'Success';
			$_SESSION['uname']=$uname;
			$flag=1;
			break;
		}
	}
	if($flag==0)
		echo 'Failure';

?>