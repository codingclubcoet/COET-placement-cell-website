<!DOCTYPE html>
<html>
<head>
<link rel ="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<title>View - Student accounts</title>
<style>
table {
border-collapse: collapse;
width: 50%;
color: #000;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
	<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Placement Cell - Admin panel</a>
    </div>
    <ul>
      <li class="no-bullet">
              <button id="logout"><a href="admindashboard.php" style="text-decoration:none">Go back</a></button>
      </li>
    </ul>
    </div>
</nav>
	<center>
<table>
<tr>
<th>Id</th>
<th>Username</th>
<th>       Email</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "", "", "placement");
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$qry = "SELECT id, username, email FROM users";
$result = $conn->query($qry);
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["id"]. "</td><td>" . $row["username"] . "</td><td>"
. $row["email"]. "</td></tr>";
}
echo "</table>";
} else { echo "Found 0 results"; }
$conn->close();
?>
</table>
<br/>
<input type="button" onclick="window.print()" value="Print Table" />
</center>
<br/>
<footer>
  &copy COET Placement cell
</footer>
</body>
</html>