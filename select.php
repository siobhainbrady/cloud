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

//SELECT * query

$sql="SELECT * FROM $_POST[cat1]";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	//output data of each row
	while ($row = $result->fetch_assoc()) {
         echo "<br> Name: ". $row["name"]. " - Price: ". $row["price"]. " - Category: ". $row["cat"]. "<br>";
     }
} else {
     echo "0 results";
}

mysqli_close($conn);
?>
<br>
<a href="index.php" title="Home"><b>Take me back to SHOP homepage!</b></a>;
</body>
</html>