<?php
	include 'connection.php';
	
if(isset($_POST['BTN'])){
	$username=$_POST['username'];
	$password=$_POST['password'];
	
	if($username != "" && $password != "" ){
		
		$chek=mysqli_query($con,"SELECT *FROM admin;");		
		$result=mysqli_fetch_assoc($chek);
		/*
		if ($result = mysqli_query($con, "SELECT *FROM admin;")) {
					  // Fetch one and one row
			while ($row = mysqli_fetch_row($result)) {
			echo $row[0];
		}
		*/
	if($result['username'] == $username && $result['password'] == $password){
		
		header("Location:http://localhost/result/link.php");
		exit;
	}
	else{
		
		header("Location:http://localhost/result/404.php?");
		exit;
		}
		
	}
	mysqli_close($con);
}
?>