<?php
session_start();

$conn = mysqli_connect("localhost", "root", "", "expense");
 	if(isset($_SESSION['user'])){
 		$id = $_SESSION['user'];
 		//echo $id;
 		
		if(isset($_POST['submit'])){
	
		 if(!empty($_POST['date'])&&!empty($_POST['iteam'])&&!empty($_POST['rs'])){

			
				
			$query = "INSERT INTO expense (date,iteam,rs,pass) VALUES";
			for ($i = 1; $i <= $_POST['number'] ; $i++) { 
				$query .= "('".$_POST['date']."','".$_POST['iteam'][$i-1]."','".$_POST['rs'][$i-1]."','$id'),";
	
			}
			$query = rtrim($query,",");
			if (!mysqli_query($conn, $query)) {
				echo mysqli_error($conn);
			}else{
				header('location:middle.php');
			}
		
		}else{
			echo "Pls fill the field";
}
		}
		
}else{
	header('location:index.php');
}
?>







<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<title>
		Expense
	</title>
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
	<form action="add.php" method="post">
		<h4>How many product you have</h4><br>
		<input type="text" name="num" size="2" class="form-control col-xs-2"><br>
		<input type="submit" name="submit1" value="DisplayInputs" class="btn btn-primary"><br>

		
		<?php if(isset($_POST['submit1'])){
			?>
			<h4 class="mt-4">Pls Enter date</h4>
			<input type="date" name="date" class="form-control"><br><br>

			<?php
			$number = $_POST['num'];
			for ($i=1; $i <= $number; $i++) { 
				
			?>
			<h5>Record #<?php echo $i;?></h5><br>
		<input type="hidden" value="<?php echo $number; ?>" name="number">
		<label>Product Name</label><br>
		<input type="text" name="iteam[]"><br>
		<label>Product Rs.</label><br>
		<input type="number" name="rs[]"><br>
		<br>
	<?php }	?>

	<input type="submit" name="submit" value="Upload" class="btn btn-primary">

	<?php


	} ?>
	
	</form>

	<!-- <a href="logout.php">Log Out</a> -->
</div>
</div>
</body>
</html>