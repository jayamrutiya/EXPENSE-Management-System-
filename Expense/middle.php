<?php
session_start();
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
               <ul class="navbar-nav">
                  <!-- <li class="nav-item">
                      <a class="nav-link" href="index.php">Home</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="tc.php">Transfer Credit</a>
                  </li> -->
                  <li class="nav-item">
                      <a class="nav-link" href="logout.php">Log Out</a>
                  </li class="nav-item">
              </ul>  
          </div>
    </nav>

<div class="container">
	<div class="jumbotron text-center">
	<?php
	
   		if (isset($_SESSION['user'])) {
   			//echo $_SESSION['user'];
	?>
	<a href="add.php"><button class="btn btn-primary">Add product</button></a>
	<br>
	<a href="record.php"><button class="btn btn-primary mt-5">See List</button></a>
	<?php
	}
	else{
		header('location:index.php');
	}
	?>
	<!-- <a href="logout.php">Log Out</a> -->
</div>
</div>
</body>
</html>