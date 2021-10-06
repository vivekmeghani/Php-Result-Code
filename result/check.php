<?php
	
	
	$cppspn="PASS";
	$sadspn="PASS";
	$wrpspn="PASS";
	$orcspn="PASS";
	
	if($cpp < 33){   	
		$cppspn="FAILL";
	}
	if($sad < 33){
		$sadspn="FAILL";
	}
	if($wrp < 33){
		$wrpspn="FAILL";
	}
	if($orc < 33){
		$orcspn="FAILL";
	}
	
	$total=$cpp+$wrp+$orc+$sad;
	$prc=$total/4;
	$grad;
	if($prc < 40){
		$grad="D";
	}else if($prc >=40 &&$prc <70){
		$grad="C";	
	}else if($prc >=70 &&$prc <90){
		$grad="B";	
	}else if($prc >=90 &&$prc <100){
		$grad="A";	
	}
	
?>
		
