<?php

//to connect thw database to the user
$con = mysqli_connect("localhost","root","","blog_samples");
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
?>