<?php
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Admin Dashboard</title>
  <link rel ="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Placement Cell - Admin panel</a>
    </div>
    <ul>
      <li class="no-bullet">
              <button id="logout"><a href="logoutadmin.php" style="text-decoration:none">Logout</a></button>
      </li>
    </ul>
  </div>
</nav>
 
<div class="box" style="width:600px; margin-bottom:290px;">
   <br />
     <center>
	<div style="text-align:center; padding:10px;">
    <div class="boxBody" >
    <h2 style="color:#066; "> Manage Users </h2>
    <div style="font-size:15px; line-height:1.2;">
    <a href="view_students.php"> View Student Accounts </a> <br />
    <a href="view_teachers.php"> View Teacher Accounts </a> <br />
    <a href="view_companys.php"> View Company Accounts </a> <br />
    </div> 
    </div>
    <br />
    </div> 
    </div>   
    </center>
<footer>
  &copy COET Placement cell
</footer>
</body>
</html>