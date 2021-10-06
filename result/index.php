<?php 

	error_reporting(0);	
	include 'insert_check.php';
?>	
	<link rel="stylesheet" href="style.css">
	
	 </br><br>	
	<form method="POST" action="">
	NO :<input type="number" placeholder="ROLL NO" name="noget">

	</br><br>
	NAM:<input type="text" placeholder="NAME" name="nameget">

	</br><br>
	CPP:<input type="number" placeholder="CPP" name="cppget" >

	</br><br>
	SAD:<input type="number" placeholder="SAD" name="sadget">
		
	</br><br>
	WRP:<input type="number" placeholder="WRP" name="wrpget">
		
	</br><br>
	ORC:<input type="number" placeholder="ORC" name="orcget">
	
	</br><br>
	<button type="BTN" name="BTN">SUBMIT</button>
	</form>

<form action="admin.php">
	<button>ADMIN</button>
</form>


<?php 
if($insert){
?>	
<table border="3" align="center" bgcolor="lightgreen" bordercolor="lightred" cellpadding="10" cellspacing="8" `  >
<tr>
	<td>NAME:</td>
	<td colspan="2"><span id="nameprint"><?php echo $name; ?></span></td>
</tr>

<tr>
	<td>Roll NO:</td>
	<td colspan="2"><span id="noprint"><?php echo $no; ?></span></td>
</tr>
<tr>
<td colspan="3" align="center">***********************************</td>

</tr>
<tr>
	<th>SUBJECT</th>
    <th>MARK</th> 
    <th>PASS OR FAIL</th>
</tr>
<tr>

	<td>CPP</td>
    <td><span id="cppmark"><?php echo $cpp; ?></span></td>
    <td><span id="cppub"><?php echo $cppspn; ?></span></td>

</tr>

<tr>

	<td>SAD</td>
    <td><span id="sadmark"><?php echo $sad; ?></span></td>
    <td><span id="sadub"><?php echo $sadspn; ?></span></td>

</tr>

<tr>

	<td>WRP</td>
    <td><span id="wrpmark"><?php echo $wrp; ?></span></td>
    <td><span id="wrpub"><?php echo $wrpspn; ?></span></td>

</tr>

<tr>

	<td>ORC</td>
    <td><span id="orcmark"><?php echo $orc; ?></span></td>
    <td><span id="orcub"><?php echo $orcspn; ?></span></td>

</tr>
<tr>

	<td colspan="3" align="center">***********************************</td>

</tr>
<tr>

	<td >TOTAL MARK:-</td>
	<td colspan="2"><span id="mtotal"><?php echo $total; ?></span></td>
    
</tr>
<tr>

	<td >PERCENTAGE:-</td>
	<td colspan="2"><span id="mavrg"><?php echo $prc."%"; ?></span></td>
    
</tr>

<tr>

	<td >GRADE:-</td>
	<td colspan="2"><span id="mgrade"><?php echo $grad; ?></span></td>
    
</tr>
</table>

<?php 
}
?>