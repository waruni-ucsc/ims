<?php
$con=mysqli_connect("localhost","root","","ims");

if(isset($_POST['login'])){
	$user_name=$_POST['user_name'];
	$password=$_POST['password'];
	$query="select * from users where user_name='$user_name' and password='$password'";
	$result=mysqli_query($con,$query);
	
	if(mysqli_num_rows($result)==1)
	{
			header("Location: reg.php");
	}
	else 
	{
		header("Location: ../company/dashboard-company.html");
	}
	
	
}
?>