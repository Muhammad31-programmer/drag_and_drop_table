<?php
$con=mysqli_connect('localhost','root','','pdb');
$data=$_POST['data'];
$i=1;
foreach ($data as $key => $value) {
	$update_data=mysqli_query($con, "update ptb set position='$i' where id='$value'");
	$i++;
}
?>