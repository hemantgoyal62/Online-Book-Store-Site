<?php
$conn = mysqli_connect("localhost","root","","kitabikeeda") or die(mysqli_error());
if(isset($_REQUEST["SUBMIT"]))
{
	// $book=$_POST[book_n];
	$price=$_POST["price"];
	$author=$_POST["author"];
	// $s="select * from books where book_name ="."'$_POST"."['book_n']"."'";
	$r=mysqli_query($conn,"select * from books where book_name='$_POST[book_n]'");
	$count=mysqli_num_rows($r);
	// $row=mysqli_fetch_array($r);
	// while($row=mysqli_fetch_assoc($r))
	// {
	// 	echo "inside while ";
	// 	$count=(($count)+1);
	// }
	// $book_num=0;
	if($count>0)
	{
		while($row=mysqli_fetch_assoc($r))
		{
			$booknum=$row["quantity"];
		}
		$booknum=(($booknum)+1);
		$s="update books set quantity=$booknum where book_name='$_POST[book_name]'";	
		$r=mysqli_query($conn,$s);
		if($r==true)
		{
			header("location:kitabikeeda.html?book_added=successful");
		}
	}
	else {
		$s="insert into books(book_name,author,price,quantity) values('$_POST[book_name]','$_POST[author]',$_POST[price],1)";
		$r=mysqli_query($conn,"insert into books(book_name,author,price,quantity) values('$_POST[book_name]','$_POST[author]',$_POST[price],1)");
		if($r==true){
			header("location:kitabikeeda.html?book_added=successful");	
		}
	}
}
?>