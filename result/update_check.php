
<?php
	error_reporting(0);
	include 'connection.php';
	
if(isset($_POST['BTN'])){
	
	$no=$_POST['noget'];
	$newno=$_POST['newnoget'];
	$name=$_POST['nameget'];
	$cpp=$_POST['cppget'];
	$sad=$_POST['sadget'];
	$wrp=$_POST['wrpget'];
	$orc=$_POST['orcget'];
	
		include 'check.php';
	
		$update=mysqli_query($con,"UPDATE student SET no='$newno',name='$name',cpp='$cpp',sad='$sad',wrp='$wrp',orc='$orc',total='$total',prc='$prc',gred='$grad' WHERE no=$no ;");
	
		mysqli_close($con);
}
?>