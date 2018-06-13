<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbName = "Math Program";

try {
    $conn = mysqli_connect($servername,$username,$password,$dbName);

    // set the PDO error mode to exception

if (isset($_GET['login_user'])) {
  $username = mysqli_real_escape_string($conn, $_GET['username']);
  $password = mysqli_real_escape_string($conn, $_GET['password']);

  	$password = md5($password);
  	$sql = "SELECT * FROM Users WHERE username='$username' AND password='$password'";
  	$statement = $conn -> query($sql);


  	if ($statement -> rowCount() == 1){
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: finalproject.html');
  	}
  }
}
catch(PDOException $e) {
    print "Connection failed: " . $e->getMessage();
}

?>