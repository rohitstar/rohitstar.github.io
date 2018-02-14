<?php

//start the session
session_start();

//destroy the session
session_destroy();
?>

<?php

//refer to server.php
include("server.php");
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Login Page</title>
<style>
.login
{
	width:250px;
	margin: 50px auto;
	font-family: cambria,"Hoefler Text","Liberation serif",Times,"Times New Roman",serif;
	color:#006;
	border-radius:10px;
	border: 2px solid #003;
	box-shadow:#666;
	margin-top:100px;
	padding:10px 40px 25px;
}
input[type=text],input[type=password]
{
	width:95%;
	padding:10px;
	margin-top:8px;
	border:1px solid #cc;
	padding-left:5px;
	font-size:16px;
	font-family:cambria,"Hoefler Text","Liberation Serif",Times,"Times New Roman",serif;
}
input[type=submit]
{
	width:100%;
	background-color:#009;
	color:#fff;
	border:2px solid #003;
	padding:10px;
	font-size:20px;
	cursor:pointer;
	border-radius:5px;
	margin-bottom:15px;
}
</style>
</head>
<body>
<div class="login">

<!--heading of the GUI-->
<h1 align="center">Login Page</h1>
<hr/>
<form action="" method="post" style="text-align:center;">

<!--for username and password-->
<input type="text" placeholder="Username" id="user" name="user2" /><br/><br/>
<input type="password" placeholder="Password" id="pass" name="pass" /><br/><br/>

<!--submit-->
<input type="submit" value="Login" name="submit" />

<!--for signup new user-->
<a href="home.php"><h6><b>Click here to signup</b></h6></a>

<!--if error then display under here-->
<span><?php echo $error;?></span>

</form>
</div>
</body>
</html>