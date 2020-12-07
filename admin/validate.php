<?php 

include_once('connection.php'); 

function test_input($data) { 
	
	$data = strip_tags($data);
	$data = trim($data); 
	$data = stripslashes($data); 
	$data = htmlspecialchars($data);
	return $data; 
} 
if ($_SERVER["REQUEST_METHOD"]== "POST") { 
	
	$adminname = test_input($_POST["adminname"]); 
	$password = test_input($_POST["password"]); 
	$stmt = $conn->prepare("SELECT * FROM adminlogin"); 
	$stmt->bindValue(1, $adminname, PDO::PARAM_STR);
	$stmt->bindValue(2, $password, PDO::PARAM_STR);
	$stmt->execute(); 
	$users = $stmt->fetchAll(PDO::FETCH_ASSOC);
	foreach($users as $user) { 		
		if(($user['adminname'] == $adminname) && 
			($user['password'] == $password)) { 
				header("Location: admindashboard.php"); 
		} 
		else { 
			echo "<script language='javascript'>"; 
			echo "alert('Illegal entry. Check credentials')"; 
			echo "</script>"; 
			die(); 
		} 
	} 
} 
?> 
