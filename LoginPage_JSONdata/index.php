<?php
$host="localhost";
$user="root";
$password="";
$db="loginform";
mysql_connect($host,$user,$password);
mysql_select_db($db);
 if(isset($_POST['username'])){
    $uname=$_POST['username'];
    $password=$_POST['password'];

    $sql="SELECT * from loginform WHERE username='".$uname."' AND password='".$password."'limit 1";
    $result=mysql_query($sql);
    if(mysql_num_rows($result==1)){
        echo " Logged in succesfully";
        exit();
    }
    else{
        echo "wrong password";
        exit();

    }
 }
 ?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login Page</title>
  <link rel="stylesheet" href="./style.css">

</head>
<body>

<div id="bg"></div>

<form  action="POST" class="form" >
  <div class="form-field">
    <input type="email" name="username" placeholder="Email / Username" required/>
  </div>
  
  <div class="form-field">
    <input type="password" name="password" placeholder="Password" required/>                         </div>
  
  <div class="form-field">
    <button class="btn" type="submit">Log in</button>
  </div>
</form>

  <!-- <script src="app.js"></script> -->
</body>
</html>
