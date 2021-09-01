<?php
$conn = mysqli_connect("localhost","root","") or die(mysqli_error());
mysqli_select_db($conn,"kitabikeeda") or die(mysqli_error());
if(isset($_REQUEST["SUBMIT"]))
{
	$s="select * from user where customer_id = '$_POST[cid]'"	;
	$r=mysqli_query($conn, $s);
	$em=$_POST['email'];
	$pass=$_POST['passw'];
	if($r==true)
	{
		while($row=mysqli_fetch_assoc($r))
		{
			if($pass==$row['password'] and $em==$row['email'])
				header("location:kitabikeeda.html?login=successful");
			else
				echo "wrong password or wrong email id";
		}
	}
}
?>
<br>
<button><a href="kitabikeeda.html">Retry</a></button>