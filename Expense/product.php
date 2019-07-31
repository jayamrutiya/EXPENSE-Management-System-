
<?php
$conn = mysqli_connect("localhost", "root", "", "expense");
//mysql_select_db("expense");
if(isset(var))
if(!empty($_POST['date'])&&!empty($_POST['iteam'])&&!empty($_POST['rs'])){
$query = "INSERT INTO expense (date,iteam,rs) VALUES";
for ($i = 1; $i <= $_POST['number'] ; $i++) { 
	$query .= "('".$_POST['date']."','".$_POST['iteam'][$i-1]."','".$_POST['rs'][$i-1]."'),";
	
}
$query = rtrim($query,",");
if (!mysqli_query($conn, $query)) {
		echo mysqli_error($conn);
	}else{
		echo "Record Saved";
	}
}else{
	echo "Pls fill the field";
}

?>












<!DOCTYPE html>
<html>
<head>
	<title>Expense</title>
</head>
<body>
	<form method="post" action="upload.php">
		<input type="date" name="date"><br><br>
		<?php 
			$number = $_POST['num'];
			for ($i=1; $i <= $number; $i++) { 
				
			?>
			<h5>Record #<?php echo $i;?></h5><br>
		<input type="hidden" value="<?php echo $number; ?>" name="number">
		<input type="text" name="iteam[]">
		<input type="text" name="rs[]" size="3"><br>
		<br>
	<?php } ?>
		<input type="submit" name="submit" value="Upload">
	</form>
</body>
</html>