<!--screanshot-->
<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "product";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}
	
	$name=$_POST['name'];
	$price=$_POST['price'];
	$Code=$_POST['Code'];
	$country=$_POST['country'];
	$expiration_date=$_POST['expiration_date'];
	
	


	$sql = "INSERT INTO `customer` ( `name`, `price`, `Code`, `country`, `expiration_date`) 
			VALUES ( '$name', '$price', '$Code', '$country', '$expiration_date');";

    //echo $sql; exit;
	if ($conn->query($sql) === TRUE) {
		header("Location: product_register.html#msg");
		die();
	} else {
	  echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
?>