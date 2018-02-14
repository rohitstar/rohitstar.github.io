<?php

//Refer to connection.php
include("connection.php");
?>

<?php

//require dbcontroller.php at once only
require_once("dbcontroller.php");

//create an intance of dbcontroller
$db_handle = new DBController();

//query to select all countries
$query ="SELECT * FROM country";
$results = $db_handle->runQuery($query);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>PHP Assignment</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="icon" href="images/nit.jpg" type="image/x-icon">
<link rel="stylesheet" href="layout/styles/layout.css" type="text/css" />

<!-- liteAccordion is Homepage Only -->
<script type="text/javascript" src="layout/scripts/jquery.min.js"></script>
<link rel="stylesheet" href="layout/scripts/liteaccordion-v2.2/css/liteaccordion.css" type="text/css" />
<script src="jquery-3.1.1.min.js"></script>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript">

<!--to get the states which belongs to that country using AJAX-->
function getState(val) {
	$.ajax({
	type: "POST",
	url: "get_state.php",
	data:'countryid='+val,
	success: function(data){
		$("#statelist").html(data);
	}
	});
}
</script>

<!--validation using javascript otherwise call alert-->
<script type="text/javascript">
function calculate(form)
{
if((form.fname.value=="") || (form.email.value=="") || (form.pass.value=="") || (form.mobile.value=="") || (form.age.value=="")|| (form.address.value==""))
{
alert('Please fill in all the fields!');
}
}
</script>

<!--GUI-->
<!--#######################################################################################################-->
</head>
<body id="top">
<div class="wrapper row1">
  <div id="header" class="clear">
    <div class="fl_left">
      <h1><a href="index.html">National Institute of Technology, Srinagar</a></h1>
      <p><font color="#FFFFFF" size="+1">PHP Assignment</font></p>
    </div>
    
  </div>
</div>

<!-- ####################################################################################################### -->
<div class="wrapper row2">
  <div id="topnav">
    <ul>
      <li class="active"><a href="home.php">Home</a></li>
        
      <li class="last"><a href="index.php">Log In</a>

      </li>
    </ul>
    <div  class="clear"></div>
  </div>
</div>
<!-- ####################################################################################################### -->

<!-- ####################################################################################################### -->
<div class="wrapper row4">
  <div id="container" class="clear"> 
    
	<!-- ####################################################################################################### -->
    <h1><font color="#000033" size="-1"><b>Fill Your Details.</b></font></h1>
    <h2 class="title"></h2>
    
    <!-- ####################################################################################################### --> 
    <div style="height: auto; width: 700px; border-color: #FFF;" >
    <form id="form1" name="form1" method="post" action="home.php">
    <table width="400px" border="0" cellspacing="5px" cellpadding="5px" align="center" bordercolor="#FFFFFF" bgcolor="#FFFF99">
    <tr>
    <td width="34%"> <label for="Fname"></label><font color="#000033"><b>Enter Your Name</b></font>
    <p>
    <input name="fname" type="text" size="40" />
    </p>
    </td>
    <td width="34%"><label for="Fname"></label>
    <b><font color="#000033">Email</font></b>
      <p>
        <label for="email"></label>
        <input name="email" type="text" id="email" size="40" />
      </p>
    </td>
    <td width="32%">
    <label for="Fname"></label>
    <font color="#000033"><b>Set a Password</b></font>    <p>
      <label for="pass"></label>
      <input name="pass" type="password" id="pass" size="40" />
    </p>
    </td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
    </tr>
  <tr>
    <td><font color="#000033"><b>Enter Mobile Number</b></font>
      <p>
        <label for="mobile"></label>
        <input name="mobile" type="number" id="mobile" size="40" />
      </p></td>
      <td><b><font color="#000033">Enter your Age</font></b>
        <p><input type="number" id="age" name="age"/></p></td>
        <td><b><font color="#000033">Select Your Gender</font></b>
          <p>
            <label for="gender"></label>
            <select name="gender" id="gender">
              <option value="Male">Male</option>
              <option value="Female">Female</option>
            </select>
          </p></td>
      </tr>
 <tr>
    <td colspan="3">&nbsp;</td>
    </tr>
  <tr>
    <td><font color="#000033"><b>Enter Your Address</b></font>
      <p><textarea name="address" cols="40" rows="4"></textarea></p>
    </td>
    <td><font color="#000033"><b>Select Your Country</b></font>
    <p><select name="countryid" id="countryid" class="demoInputBox" onChange="getState(this.value);">
<option value="">Select Country</option>
<?php
foreach($results as $country) {
	var_dump($country);
?>
<option value="<?php echo $country["country_name"];?>"><?php echo $country["country_name"]; ?></option>
<?php
}
?></p>
    </td>
    <td><font color="#000033"><b>Select Your State</b></font>
    <p>
    <select name="statelist" id="statelist" class="demoInputBox">
<option value="">Select State</option>
</select>
    </p>
    </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
    </tr>
  <tr>
    <td colspan="3"><input type="submit" name="submit" id="submit" value="Submit the form" style="width:200px;background-color:#003;
	color:#fff;
	border:1px solid #06F;
	padding:6px;
	font-size:12px;
	cursor:pointer;
	border-radius:5px;
	margin-bottom:5px;" onClick='calculate(form);'/> 
    
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" name="reset" id="reset" value="Reset the values" style="width: 200px; background-color: #003; color: #fff; border: 1px solid #06F; padding:6px; font-size: 12px; cursor: pointer; border-radius: 5px; margin-bottom: 5px;"/></td>
    </tr>
</table>

    </form>
    </div>
    <h2 class="title"></h2>
  </div>
</div>

<!-- ####################################################################################################### -->
<div class="wrapper row5">
  <div id="footer" class="clear"> 
    
  <!-- ####################################################################################################### -->
    <div class="foot_contact">
      <h2><font color="#FFFFFF" >National Institute of Technology Srinagar (J&K)</font></h2>
    </div>
   
  <!-- ####################################################################################################### --> 
  </div>
</div>

<!-- ####################################################################################################### -->
<div class="wrapper">
  <div id="copyright" class="clear">
    <p class="fl_left"><font color="#FFFFFF">All rights reserved @ National Institute of Technology, Srinagar</font></p>
    <p class="fl_right"><font color="#FFFFFF">Designed By Dharmendra</font></p>
  </div>
</div>

<!--#########################################################################################################-->
</body>
</html>
<?php

//Refer to connection.php
include("connection.php");

//checks when the information submit
if(isset($_POST['submit']))
{
	$a=$_POST['fname'];
	$b=$_POST['email'];
	$c=$_POST['pass'];
	$d=$_POST['mobile'];
	$e=$_POST['age'];
	$f=$_POST['address'];
	$g=$_POST['gender'];
	$h=$_POST['countryid'];
	$i=$_POST['statelist'];
	
	//check for already present information 
	$log=mysqli_query($con,"INSERT INTO details(fname,email,password,mobile,age,address,gender,country,state) VALUES ('$a','$b','$c','$d','$e','$f','$g','$h','$i')");
    if(!$log)
	{
	echo("<script>alert('Record Already Present')</script>");
	}
	else
	{
	echo("<script> alert('Record Successfully Inserted')</script>");
	}
}
?>