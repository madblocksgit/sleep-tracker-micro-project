<?php
   session_start();
?>

<!DOCTYPE html>
<html>
<style >
  td {
    color: white;
  }
	.image{

	background-image: url(https://cdn.wallpapersafari.com/48/48/NQV7zq.jpg);
        padding-top: 150px
    
	}
	.form{
		color:white;
	}
</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<body class="image">
	<center>
    <nav style="float: right; padding: 50px;">
      <button onclick="logoutKaro()">Logout</button>
    </nav>
<h1>DAILY SLEEP TRACKER</h1>		
<h1 class="form">New Entry</h1>
<br>
  <label for="dates" class="form">DATE:</label>

  <input type="date" id="dates" name="dates"><br></br>
    <br>
 <label for="tim" class="form">SLEEP TIME :&nbsp;&nbsp;&nbsp;&nbsp;</label>
<input type="time" id="tim" name="tim"  value=""><br></br>
 <br>
 <label for="tme" class="form">wakeup time TIME :</label>
<input type="time" id="tme" name="tme" value= ""><br>
<br> <br>
<input type="reset"> &nbsp; &nbsp;
<input type="button" value="Cancel" onclick="location.href='@Url.Action("Index" , "Home" )';">&nbsp; &nbsp;
<button onclick="submitKaro()">Submit</button></br>
</center>

<p id="demo" style="color:green"></p>
<div class="container">
  <h1 align="center" style="color:yellow">Sleep Log</h1>
<table class="table table-bordered">
    <thead>
      <tr>
        <th>Data ID</th>
        <th>Name</th>
        <th>Date</th>
        <th>Sleep Time</th>
        <th>WakeUp Time</th>
      </tr>
    </thead>
    <tbody>
      <?php 
        $server="localhost";
        $username="root";
        $password="";
        $dbname="sleep_tracking";

        // Connecting with Server
        $conn=mysqli_connect($server,$username,$password,$dbname);  
        if(!$conn) {
          echo 'Connection Failure';
        }

        // Prepare an SQL Injection
        $sql="SELECT * FROM sleeplog";

        // query this injection
        $data=mysqli_query($conn,$sql);
        if(mysqli_num_rows($data)>0) {
          while($row=mysqli_fetch_assoc($data)) {
            if($row['uname']==$_SESSION['uname']) {

      ?>
              <tr>
                <td><?php echo $row['id'];?></td>
                <td><?php echo $row['uname'];?></td>
                <td><?php echo $row['dates'];?></td>
                <td><?php echo $row['times'];?></td>
                <td><?php echo $row['timew'];?></td>
              </tr>
      <?php
           }
          }
        }
      ?>

    </tbody>
  </table>
 </div>
<script>
function myFunction() {
var x = document.getElementById("tim").value;
var y = document.getElementById("tme").value;
document.getElementById("demo").innerHTML = x+y;
}
</script>
<!-- <input type="button" value="Cancel" onclick="location.href='@Url.Action("Index" , "Home" )';">
<input type ="submit"></br>
 -->
 <script>
 		function submitKaro() {
 			var dates=document.getElementById('dates').value;
 			var times=document.getElementById('tim').value;
 			var timew=document.getElementById('tme').value;

 			var dataString="dates="+dates+"&times="+times+"&timew="+timew;
 			$.ajax({
                type : "POST",  
                url  : "timerequest.php",  
                data : dataString,
                success: function(res){ 
                    console.log(res); 
                    if(res=='Success') {
                    	alert("Records Added Successfully");
                      window.open('time.php',target="_self")
                    }
                }
            });
 		}
 </script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
        
    </script>
    <script>
      function logoutKaro() {
        window.open('index.html',target="_self")
      }
    </script>
</body>
</html>