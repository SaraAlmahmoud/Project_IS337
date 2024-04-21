<!DOCTYPE HTML>
<html>
<head>
  <meta charset="UTF-8">
  <title>producyList</title>
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
		<h1 style="float:left;">Products List</h1>
		
		<h1 style="float:right;"><a class="search_button" href="search_product.php">Search</a></h1>
		<br><br><br>
		
		<table style="width:100%">
		  <tr>
			<th>ID</th>
			<th>name</th>
			<th>price</th>
			<th>code</th>
			<th>country</th>
			<th>expiration_date</th>
			<th></th>
		  </tr>
		 
		 <?php
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "product";

			// Create connection
			$conn = new mysqli("localhost", $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) {
			  die("Connection failed: " . $conn->connect_error);
			}
			<!--screanshot-->
			$sql = "SELECT * FROM customer order by price ASC";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			  // output data of each row
			  while($row = $result->fetch_assoc()) {
				echo "<tr><td>".$row["id"]."</td><td>".
				$row["name"]."</td><td>".
				$row["price"]."</td><td>".
				$row["Code"]."</td><td>".
				$row["country"]."</td><td>".
				$row["expiration_date"]."</td><td>".
				"<a href='product_update.php?id=".$row["id"]."'>Edit</a></td></tr>";
			 }
			} else {
			  echo "0 results";
			}
			$conn->close();
		?>
		 
		 
		</table>
		
		
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

