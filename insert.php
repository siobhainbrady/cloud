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

//Create INSERT query

$sql="INSERT INTO $_POST[cat1] (name,price,cat) VALUES ('$_POST[name]','$_POST[price]','$_POST[cat1]')";

if ($conn->query($sql) === TRUE) {
	echo "New record created successfully";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}

mysqli_close($conn);
?>
<br><br>
<a href="index.php" title="Home"><b>Take me back to SHOP homepage!</b></a>;
</body>
</html>
