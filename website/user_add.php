<?php
$conn = mysqli_connect("localhost","root","") or die(mysqli_error());
mysqli_select_db($conn,"kitabikeeda") or die(mysqli_error());
if(isset($_REQUEST["SUBMIT"]))
{
	$s = "insert into user(customer_id,email,password) values ('$_POST[cid]','$_POST[email]','$_POST[pass]')";
	$r = mysqli_query($conn,$s);
	if($r==true)
	{
		
		header("location:kitabikeeda.html");
		echo "Record inserted!!";
	}
	else
		echo "Customer id already exits. choose any other id.";
}
?>