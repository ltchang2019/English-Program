<?php include('adminServer.php') ?>
<!DOCTYPE html>
<style>
* {
  margin: 0px;
  padding: 0px;
}
body {
 font-size: 120%;
    background-image: url("graceWall.png");
  background-repeat:no-repeat;
    background-size:cover;
}

.header {
  width: 30%;
  margin: 150px auto 0px;
  color: white;
  font-family: sans-serif;
  background: brown;
  text-align: center;
  border: 1px solid #B0C4DE;
  border-bottom: none;
  border-radius: 10px 10px 0px 0px;
  padding: 20px;
}
form, .content {
  width: 30%;
  margin: 0px auto;
  padding: 20px;
  border: 1px solid #B0C4DE;
  background: white;
  border-radius: 0px 0px 10px 10px;
}
.input-group {
  margin: 10px 0px 10px 0px;
}
.input-group label {
  display: block;
  text-align: left;
  margin: 3px;
}
.input-group input {
  height: 30px;
  width: 93%;
  padding: 5px 10px;
  font-size: 16px;
  border-radius: 5px;
  border: 1px solid gray;
}
.btn {
  padding: 10px;
  font-size: 15px;
  color: white;
  background: brown;
  border: none;
  border-radius: 5px;
}
.error {
  width: 92%; 
  margin: 0px auto; 
  padding: 10px; 
  border: 1px solid #a94442; 
  color: #a94442; 
  background: #f2dede; 
  border-radius: 5px; 
  text-align: left;
}
.success {
  color: #3c763d; 
  background: #dff0d8; 
  border: 1px solid #3c763d;
  margin-bottom: 20px;
}
</style>

<html>
<head>
  <title>Administrator Login</title>
</head>
<body>
  <div class="header">
    <h2>Administrator Login</h2>
  </div>
   
  <form method="post" action="adminLogin.php">
    <?php include('errors.php'); ?>
    <div class="input-group">
      <label>Username</label>
      <input type="text" name="username" >
    </div>
    <div class="input-group">
      <label>Password</label>
      <input type="password" name="password">
    </div>
    <div class="input-group">
      <button type="submit" class="btn" name="login_user">Login</button>
    </div>
    <p>
      Don't have an account? <a href="adminRegister.php">Sign up</a>
      <a href="index.html"><img src="backButton.png" style="float: right; width:75px; height:30px; margin-bottom: 15px;"></a>
    </p>
  </form>
</body>
</html>