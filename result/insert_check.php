<?php
	include 'connection.php';
	error_reporting(0);	
	
if(isset($_POST['BTN'])){
	
	$no=$_POST['noget'];
	$name=$_POST['nameget'];
	$cpp=$_POST['cppget'];
	$sad=$_POST['sadget'];
	$wrp=$_POST['wrpget'];
	$orc=$_POST['orcget']; 
	
	if($no && $name && $cpp && $sad && $wrp && $orc){
		include 'check.php';

			$insert=mysqli_query($con,"INSERT INTO student VALUES ('$no','$name','$cpp','$sad','$wrp','$orc','$total','$prc','$grad');");
					mysqli_close();
	}
	else{
			header("Location:http://localhost/result/404.php");
			exit;
	}
	mysqli_close($con);	
}
?>
