<?php
session_start();

// initializing variables
$username = "";
$firstName    = "";
$lastName = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('db746401298.db.1and1.com', 'dbo746401298', 'Tr@vel000', 'db746401298');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $firstName = mysqli_real_escape_string($db, $_POST['firstName']);
  $lastName = mysqli_real_escape_string($db, $_POST['lastName']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($firstName)) { array_push($errors, "First name is required"); }
  if (empty($lastName)) { array_push($errors, "Last name is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
  array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM Administrators WHERE username='$username' OR firstName='$firstName' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
    $password = md5($password_1);//encrypt the password before saving in the database

    $query = "INSERT INTO Administrators (firstName, lastName, username, password, groupNumber) 
          VALUES('$firstName', '$lastName', '$username', '$password', 0)";
    mysqli_query($db, $query);
    $_SESSION['username'] = $username;
    $_SESSION['firstName'] = $firstName;
    $_SESSION['success'] = "You are now logged in";
    header('location: adminHome.php');
  }
}

// ... 

// LOGIN USER
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
    array_push($errors, "Username is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
    $password = md5($password);
    $query = "SELECT * FROM Administrators WHERE username='$username' AND password='$password'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
      foreach($results as $row){
        $firstName = $row['firstName'];
      }
      $_SESSION['username'] = $username;
      $_SESSION['firstName'] = $firstName;

      $_SESSION['success'] = "You are now logged in";
      header('location: AdminHome.php');
      print $_SESSION['firstName'];

    }else {
      array_push($errors, "Wrong username/password combination");
    }
  }
}

?>