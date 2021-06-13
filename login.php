<?php
   session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daily Sleep Tracker</title>
    <link href="login.css" type="text/css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="header">
            <a class="headerclick" href="login.php" style="color: ivory; text-decoration: none;">
                Daily Sleep Tracker
            </a>
        </div>
        <div class="body form">

            <h3>LOGIN PAGE</h3>
            
                <label>
                    Enter user name
                </label>
                <br>
                <input type="text" id="username"/>
                <br>
                <label>
                    Enter password
                </label>
                <br>
                <input type="password" id="password"/>
                <br>
                <button onclick="resetKaro()">Reset</button>
                <button onclick="loginKaro()">Login</button>
                <br>
                <label>
                    not registered?
                </label>
                <a href="register.html">
                    Register
                </a>
                <p id="prompt" style="color:red;font-style: bold;"></p>
        </div>
    </div>
    <script>
        function loginKaro() {
            var username=document.getElementById('username').value;
            var password=document.getElementById('password').value;

            var dataString="uname="+username+"&pwd="+password;
            $.ajax({
                type : "POST",  
                url  : "loginrequest.php",  
                data : dataString,
                success: function(res){ 
                    console.log(res); 
                    if(res=='Success') {
                        document.getElementById('prompt').innerHTML='Success';
                        setTimeout(function () {
                            window.location.href = "time.php"
                        }, 3000);
                    } else if(res=='Failure') {
                        document.getElementById('prompt').innerHTML='Failure, Check Credentials';
                    }                        
                }
            });
        }

        function resetKaro() {
            document.getElementById('username').value="";
            document.getElementById('password').value="";
        }
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
        
    </script>
    
</body>
</html>