<?php
$conn = mysqli_connect("localhost", "root", "", "expense");
//mysql_select_db("expense");
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