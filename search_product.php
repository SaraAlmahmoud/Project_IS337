<!DOCTYPE HTML>
<html>

<head>
  <meta charset="UTF-8">
  <title>Search Product</title>
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

	
		<?php
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "ajdar_proj2022";

			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) {
			  die("Connection failed: " . $conn->connect_error);
			}
			if ($_SERVER['REQUEST_METHOD'] === 'POST') {
				$sql = "SELECT * FROM products where expiration_date='".$_POST['date']."'";
				//echo $sql; exit;
				$result = $conn->query($sql);
				if ($result->num_rows > 0) {
				  // output data of each row
				  while($row = $result->fetch_assoc()) {
					  echo "<h1 style='color:green;'>Search Result: </h1><ul><li>Product ID: IT00".$row["id"]."</li>".
					  "<li> Product Name : ".$row["name"]."</li>".
					  "<li> Product price : ".$row["price"]."</li>".
					  "<li> Product country : ".$row["country"]."</li>".
					  "<li> Product expiration_date : ".$row["expiration_date"]."</li>".
					  "</li></ul>";		
				  }
				} else {
				  echo "<h1 style='color:red;'>No Result ! </h1>";
				}
			
			}	
		 ?>
		 
		 <br><br>
	
		 <form method="post" action="search_product.php">  
			  <label> Expiration date Search:</label><br>
			  <input type="date" required name="date" placeholder="Expiration Date"><br>
		   <input class="button" type="submit" value="Search"/>
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


