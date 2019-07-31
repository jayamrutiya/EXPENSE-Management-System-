<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "expense");
if (isset($_POST['submit'])) {
	$pass = $_POST['pass'];

	$q = mysqli_query($conn, "SELECT pass FROM expense WHERE pass='$pass'") or die(mysqli_error($conn));

	$data = mysqli_fetch_array($q, MYSQLI_BOTH); 

	if ($data>0) {
		$_SESSION["user"] = $pass;
		header("location:middle.php");
		
	}else{
		echo "<script>alert('Login fail')</script>";
	}
}




?>








<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<title>Expense</title>
</head>
<body>

<nav class="navbar navbar-expand-sm navbar-dark bg-primary mb-3">
        <div class="container">
          <a class="navbar-brand" href="logout.php">Expense Managment</a>
              <!-- <ul class="navbar-nav">
                  <li class="nav-item">
                      <a class="nav-link" href="index.php">Home</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="tc.php">Transfer Credit</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="allusers.php">See All Users</a>
                  </li class="nav-item">
              </ul> --> 
          </div>
    </nav>



	<div class="container">
	<div class="jumbotron text-center">
	<form method="post" action="login.php">
		<label>Password: </label><input type="password" name="pass" class="form-control">
		<br>
		<input type="submit" name="submit" class="form-control btn btn-primary">
	</form>
</div>
</div>
</body>
</html>