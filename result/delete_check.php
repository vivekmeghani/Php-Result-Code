<link rel="stylesheet" href="style.css">

<?php 

	include 'connection.php';
	

if(isset($_POST['BTN'])){
	$no=$_POST['noget'];
	
	$delete=mysqli_query($con,"DELETE FROM student WHERE no='$no'");
	
		if($delete){
			echo "<hr><br><hr><br><hr> DELETE DONE..!";
		}
		else
		{
			echo "<hr><br><hr><br><hr> DELETE NOT DONE";
		}
}
?>