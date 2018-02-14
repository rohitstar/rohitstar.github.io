<?php

//start session
session_start();
if(isset($_SESSION['user']))
{
$admin=$_SESSION['user'];
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>PHP Assignment</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="layout/styles/layout.css" type="text/css" />
<link rel="stylesheet" href="layout/styles/bootstrap-3.3.5-dist/css" type="text/css" />
<script type="text/javascript" src="layout/scripts/jquery.min.js"></script>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="jquery-3.1.1.min.js"></script>
<script type="text/javascript">

<!--to uppercase the first letter--> 
function upperCaseFirstLetters(elm) 
{
        var myTextObject = document.getElementById(elm);
        myTextObject.value = myTextObject.value.replace(/\w\S*/g, function(txt){return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();});
}
function f(o)
{
	o.value=o.value.toUpperCase().replace(/([^A-Z. ^0-9- ])/g,"");
}
function f1(o)
{
	o.value=o.value.toUpperCase();
}

<!--######################################################################################################-->
</script>
</head>
<body id="top">
<div class="wrapper row1">
  <div id="header" class="clear">
    <div class="fl_left">
      <h1><a href="index.html">National Institute of Technology, Srinagar</a></h1>
      <p><font color="#FFFFFF" size="+1">PHP Assignment</font></p>
      <p>&nbsp;
      
      </p>
      <p><font color="#FFFFFF" size="-1">" Welcome <?php echo $admin;?> "</font></p>
    </div>
    
  </div>
</div>

<!-- ####################################################################################################### -->
<div class="wrapper row2">
  <div id="topnav">
    <ul>
      <li class="active"><a href="home.php">Home</a></li>
      <li><a href="#">Log in</a></li>
      </li>
      <li class="last"><a href="index.php">LogOut</a>

      </li>
    </ul>
    <div  class="clear"></div>
  </div>
</div>

<!-- ####################################################################################################### -->
<div class="wrapper row4">
  <div id="container" class="clear" length =100% width=100%> 
  
    <!-- ####################################################################################################### -->
    
    <h3><b><font color="#000033" size="-1">"<?php echo $admin;?>"&nbsp;&nbsp;&nbsp;Your Details are as:</font></b></h3>
    <h2 class="title"></h2>
	
    <!-- ####################################################################################################### --> 
    <?php
	
	//to connect with the databese
	$con = mysqli_connect("localhost","root","","blog_samples");
	$result1 = mysqli_query($con,"select * from details where email='$admin'");
	$myrow = mysqli_fetch_array($result1,MYSQLI_ASSOC);
	?>
	
	<!--#######################################################################################################-->
    <div style="height: auto; width: 100%; border-color: #FFF;" >
    <table width='900px' border='1' cellspacing='0' cellpadding='0' align='center'>
  <tr>
    <td colspan="2"align='center' class='menu-heading1' bgcolor="#06213F"><font color="#000033">.</font></td>
  </tr>
  <tr>
  <td width="40"><font color="#000033" size="-1"><b>Name</b></font></td>
    <td width="289"class='news-link' align='justify'><span class="menu-heading"><?php echo $myrow['fname'];?></span></td>
    </tr>
    <tr>
  <td width="40"><font color="#000033" size="-1"><b>Email Id</b></font></td>
    <td width="289"class='news-link' align='justify'><span class="menu-heading"><?php echo $myrow['email'];?></span></td>
    </tr>
    <tr>
  <td width="40"><font color="#000033" size="-1"><b>Mobile No.</b></font></td>
    <td width="289"class='news-link' align='justify'><span class="menu-heading"><?php echo $myrow['mobile'];?></span></td>
    </tr>
    <tr>
  <td width="40"><font color="#000033" size="-1"><b>Age</b></font></td>
    <td width="289"class='news-link' align='justify'><span class="menu-heading"><?php echo $myrow['age'];?></span></td>
    </tr>
    <tr>
  <td width="40"><font color="#000033" size="-1"><b>Gender</b></font></td>
    <td width="289"class='news-link' align='justify'><span class="menu-heading"><?php echo $myrow['gender'];?></span></td>
    </tr>
    <tr>
  <td width="40"><font color="#000033" size="-1"><b>Address</b></font></td>
    <td width="289"class='news-link' align='justify'><span class="menu-heading"><?php echo $myrow['address'];?></span></td>
    </tr>
    <tr>
  <td width="40"><font color="#000033" size="-1"><b>Country</b></font></td>
    <td width="289"class='news-link' align='justify'><span class="menu-heading"><?php echo $myrow['country'];?></span></td>
    </tr>
    <tr>
  <td width="40"><font color="#000033" size="-1"><b>State</b></font></td>
    <td width="289"class='news-link' align='justify'><span class="menu-heading"><?php echo $myrow['state'];?></span></td>
    </tr>
    <tr>
    <td colspan="2"align='center' class='menu-heading1' bgcolor="#06213F"><font color="#000033">.</font></td>
  </tr>
  </table>
    
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
  </div>
</div>

<!-- ####################################################################################################### -->
<div class="wrapper">
  <div id="copyright" class="clear">
    <p class="fl_left"><font color="#FFFFFF">All rights reserved @ National Institute of Technology, Srinagar</font></p>
    <p class="fl_right"><font color="#FFFFFF">Designed By Dharmendra</font></p>
  </div>
</div>

<!-- liteAccordion is Homepage Only --> 
<script type="text/javascript" src="layout/scripts/liteaccordion-v2.2/js/liteaccordion.jquery.min.js"></script> 
<script type="text/javascript">
$("#featured_slide").liteAccordion({
    theme: "os-tpl",
    containerWidth: 960,               // fixed (px)
    containerHeight: 360,              // fixed (px) - overall height of the slider
    headerWidth: 48,                   // fixed (px) - slide spine title
    firstSlide: 1,                     // displays slide (n) on page load
	activateOn: "click",               // click or mouseover
    autoPlay: false,                   // automatically cycle through slides
    pauseOnHover: true,                // pause slides on hover
    rounded: false,                    // square or rounded corners
    enumerateSlides: true,             // put numbers on slides
    slideSpeed: 800,                   // slide animation speed
    cycleSpeed: 6000,                  // time between slide cycles
});
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
</script>
</body>
</html>
 