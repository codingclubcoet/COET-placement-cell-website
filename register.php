<!DOCTYPE html>
<html>
<meta charset="utf-8">
<title>Registration - student</title>
<link rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script type="text/javascript" src="js/script.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<?php
require('db.php');
if (isset($_REQUEST['username'])){
	$username = stripslashes($_REQUEST['username']);
	$username = mysqli_real_escape_string($con,$username); 
	$email = stripslashes($_REQUEST['email']);
	$email = mysqli_real_escape_string($con,$email);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
	$trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `users` (username, password, email, trn_date)
VALUES ('$username', '".md5($password)."', '$email', '$trn_date')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'>
        <h3>You are registered successfully.</h3>
        <br/>Click here to <a href='login.php'>Login</a></div>";
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
<h1>Registration</h1>
<form name="registration" action="" method="post">
<input type="text" name="username" placeholder="Username" required />
<input type="email" name="email" placeholder="Email" required />
<input type="password" name="password" placeholder="Password" required />
<input type="submit" name="submit" value="Register" />
</form>
</div>
<?php } ?>
<br/>
<footer>
    Created by COET placement cell
</footer>
</body>
</html>
