<?php
    if(! isset($_GET['id'])){
		header("Location: product_list.php");
		die();
	}
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "prodict";

	// Create connection
	$conn = new mysqli("localhost", $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}

	$sql = "SELECT * FROM coustmer where id=".$_GET['id'];
	//echo $sql; exit;
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
	  // output data of each row
	  while($row = $result->fetch_assoc()) {
		  	$name=$row["name"];
		  	$price=$row["price"];
		  	$code=$row["Code"];
		  	$country=$row["country"];
		  	$expiration_date=$row["expiration_date"];
		  	$Category=$row["Category"];
		  	$description=$row["description"];		
	  }
	} else {
	  echo "<h1 style='color:red;'>No Result ! </h1>";
	}
				
?>

<!DOCTYPE HTML>
<html>

<head>
  <meta charset="UTF-8">
  <title>Update Product</title>
     <meta http-equiv="refresh" content="43200">

	 <link rel="stylesheet" type="text/css" href="formating.css" />
</head>

<body id="top">
    <div id="header">
		<div id="logo">
		  <img src="logo.png" width="200" height="130"/>		
		  <a href="#" class="hbutton">sign in</a>
		  <a href="#" class="hbutton">sign up</a> 
		</div>
		
		<div id="menubar">
			<ul id="menu">
				<li ><a href="homepage.html">Home</a></li>
				<li class="selected"><a href="about.html">about us</a></li>
				<li><a href="Contact.html">Contact us</a></li>
				 <li><a href="Profile.html">Profile</a></li>
			   <li><a href="Product.html">Product Registration</a></li>
			   <li><a href="productList.html">Product List</a></li>
				  <li class="dropdown">
					   <a href="gallary.html"> <class="drop-btn"> Product Gallery</a>
					  <div class="dropdown-content">
						  <a href="makeup.html">Makeup</a>
						  <a href="skincare.html">Skincare</a>
						  <a href="perfume.html">Perfume</a>
					</div>
				</li>
	
			</ul>
		  </div>

	
	<div class="bg_img" id="site_content">
      <div id="content">
		<p>• • Update information of a product..</p>
		
		<h3 id="msg" style="display:none; color:green;">
			New record created successfully
		</h3>
		<?php
			if ($_SERVER['REQUEST_METHOD'] === 'POST') {
				$id=$_POST["id"];
				$name=$_POST["name"];
				$price=$_POST["price"];
				$code=$_POST["Code"];
				$country=$_POST["country"];
				$expiration_date=$_POST["expiration_date"];
					
				
				
				$sql = "UPDATE products SET name='$name',price='$price', Code='$code',
				country='$country', expiration_date='$expiration_date' WHERE id=$id ";
				//echo $sql; exit;
				if ($conn->query($sql) === TRUE) {
				  echo "<h1 style='color:green;'>Record updated successfully</h1>";
				} else {
				  echo "<h1 style='color:red;'>Error in update </h1>" . $conn->error;
				}

				$conn->close();
			
			}	
		
		?>
		
		
		<form method="post" action="product_update.php?id=<?php echo $_GET['id']?>">
			  <input type="hidden" value="<?php echo $_GET['id']?>" name="id"/>
			  
			  <label> Product name:</label><br>
			  <input required type="text" name="name" value="<?php echo $name; ?>"><br>
			  
			  <label>price:</label><br>
			  <input type="number" class="input_num" name="price" value="<?php echo $price; ?>"><br>
			  
			  <label>Code:</label><br>
			  <input type="text" pattern="[0-9]{2}-[0-9]{3}" name="Code" value="<?php echo $code; ?>"><br>
			  
			  <label>country of origin:</label><br>
			  <input type="text" name="country" value="<?php echo $country; ?>"><br>
			  
			  <label>expiration date:</label><br>
			  <input type="date" name="expiration_date" value="<?php echo $expiration_date; ?>"><br>
			  
		   <input class="button" type="submit" value="Update"/>
		   <input class="button" type="Reset" value="Clear"/>
		   </p>
		 </form>
		
		
		
		
		
	   </div>
    </div>
<br>
<div id="footer">
	<p>
   &copy; Beauty Luxe Cosmetics <sup></sup>
<a href="#top">UP</a>
  </p>
</div>

</body>
</html>
