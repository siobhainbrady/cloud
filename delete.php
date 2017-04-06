<html>
<body>
<?php

//Create connection
$conn = new mysqli('localhost','root','');

//Check Connection
if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
}
echo "DB Connected Successfully";

//This will select the Database shop
mysqli_select_db($conn,"shop");
echo "\n DB is selected as shop successfully";

//Create DELETE query

$sql="DELETE FROM $_POST[cat1] WHERE name= '$_POST[name]'";

if ($conn->query($sql) === TRUE) {
	echo "New record deleted successfully";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}

mysqli_close($conn);
?>
<br>
<a href="index.php" title="Home"><b>Take me back to SHOP homepage!</b></a>;
</body>
</html>
