<?php

//require dbcontroller.php at once
require_once("dbcontroller.php");

//create an instance of dbcontroller
$db_handle = new DBController();
echo $_POST["countryid"];

//give those states which belong to that countryname
if(!empty($_POST["countryid"])) {
	$query ="SELECT * FROM states WHERE countryname = '" . $_POST["countryid"] . "'";
	$results = $db_handle->runQuery($query);
?>

	<option value="">Select State</option>

<?php
     
	//using foreach results display statename
	foreach($results as $state) {
?>
	<option value="<?php echo $state["name"]; ?>"><?php echo $state["name"]; ?></option>
<?php
	}
}
?>