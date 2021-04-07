<?php
	include("config.php");
	
	if(isset($_POST['submit']))
	{
	$noItem= $_POST['noItem'];
    $Product=$_POST['Product'];
    $price=$_POST['price'];
    $quantity=$_POST['quantity'];
    $total=$_POST['total'];
	
	$result=mysqli_query($mysqli,"INSERT into record values('','$noItem','$Product','$price','$quantity')");
	
} else{
	echo "All field are required!";
	die();
}

?>