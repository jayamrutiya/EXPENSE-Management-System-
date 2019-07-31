<?php
session_start();
// echo $_SESSION['user'];
//echo $_SESSION['user'];
if (!isset($_SESSION['user'])) {
	header("location:index.php");
}
$conn = mysqli_connect("localhost", "root", "", "expense");
$password = $_SESSION['user'];
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<title>Records</title>
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
	<form action="record.php" method="post">
		<h4>Pls Enter date for see your Expense...</h4>
		<input type="date" name="date" class="form-control">
		<input type="submit" name="submit" value="Show" class="btn btn-primary mt-3">
	</form>
	<br>
	<!-- <a href="logout.php">Log Out</a> -->
	<?php
		if (isset($_POST['submit'])) {
			?>
	<table class="table">
		<thead>	
 				<tr>
 					<th>Date</th>
 					<th>Iteam</th>
 					<th>Rs.</th>
 				</tr>
		</thead>
	<?php

 	$date = $_POST['date'];

 	$q = "SELECT * FROM expense WHERE date='$date' AND pass='$password'";
 	$res = mysqli_query($conn, $q);


  
 	$sum = 0;
	while ($row = mysqli_fetch_array($res,MYSQLI_BOTH)) {
		$sum +=$row['rs'];
 	 	$date = $row['date'];
 	 	$iteam = $row['iteam'];
 	 	$rs = $row['rs'];
 	?>

 		
 			<tbody>
 				<tr>
 					<th scope="row"><?php echo $date ; ?></th>
 					<th><?php echo $iteam ; ?></th>
 					<th><?php echo $rs ; ?></th>
 				</tr>
 			</tbody>
 				<br>

 	<?php
 	 } 
 	 echo "Total: ".$sum;
?>
 		</table>
<?php
}

	?>
	

</div>
</div>
</body>
</html>