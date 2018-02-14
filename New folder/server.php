<?php

//start session
session_start();

//to create connection to database
$con = mysqli_connect("localhost","root","","blog_samples");

//if any error then display error type
if ($con->connect_error) 
{
    die("Connection failed: " . $con->connect_error);
} 

$error='';
if(isset($_POST['submit']))
{
	if(empty($_POST['user2'])||empty($_POST['pass']))
	{
		$error="You Cannot Leave The Above Fields Empty";
	}
	else
	{
		$user=$_POST['user2'];
		$pass=$_POST['pass'];
		
		//query to select username and password
		$result = mysqli_query($con,"SELECT * FROM details WHERE email='$user' AND password='$pass'");
		$rows = mysqli_num_rows($result);
		if($rows==1)
		{
				header("Location:users.php");
			}
			else
			{
				$error="Username & Password is Invalid";
			}
		}
		$_SESSION['user']=$_POST['user2'];
	}
	
$con->close();
?>

