<!DOCTYPE html>
<html>
<meta charset="utf-8">
<title>Login - Student</title>
<link rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script type="text/javascript" src="js/script.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
   
<body>
<?php
require('db.php');
session_start();
if (isset($_POST['username'])){
	$username = stripslashes($_REQUEST['username']);
	$username = mysqli_real_escape_string($con,$username);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
        $query = "SELECT * FROM `users` WHERE username='$username'and password='".md5($password)."'";
	$result = mysqli_query($con,$query) or die(mysql_error());
	$rows = mysqli_num_rows($result);
        if($rows==1){
	    $_SESSION['username'] = $username;
	    header("Location: dashboard.php");
         }
         else{
		echo "<div class='form'><h3>Username/password is incorrect.</h3> <br/>Click here to <a href='login.php'>Login</a></div>";
		}
    }else{
?>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">Placement Cell</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="news.php">News</a></li>
      <li><a href="login.php">Login</a></li>
      <li><a href="register.php">Register</a></li>
    </ul>
  </div>
</nav>
<div class="form">
<h1>Log In</h1>
<form action="" method="post" name="login">
<input type="text" name="username" placeholder="Username" required />
<input type="password" name="password" placeholder="Password" required />
<br>
<input name="submit" type="submit" value="Login" />
</form>
<p>Not registered yet? <a href='register.php'>Register Here</a></p>
</div>
<?php } ?>
</body>
<footer>
	&copy Copyright reserved 2018 - COET Placement cell
</footer>
</html>
