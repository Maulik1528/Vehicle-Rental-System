<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vrs";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


?>

<!DOCTYPE html>
<html>
<head>
	<title>Vehicles</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<style type="text/css">
		.image{
			float: left;
		}
	</style>
</head>
<body>
	<?php include 'header.php' ?>
	<div>
		<h1 style="text-align: center; ">All vehicles</h1>
		<p style="text-align: center; ">It uses utility classes for typography and spacing to space content out within the larger container.</p>
	</div>
	<div class="jumbotron" style="margin-left: 65px ; margin-right: 65px;  padding-left:30px; padding-right: 40px ">
		
 		 <div>
 		 	<img class="image" src="<?php 
					$sql = 'SELECT image FROM Vehicles where cname="BMW" ';
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
   					 while($row = $result->fetch_assoc()) {
        				echo $row["image"];
    				}
					} else {
    					echo "0 results";
					} ?>" width="150px" height="100px">
 		 <div class="row" style="margin-bottom: 1px ; margin-top: 1px">
  			 <div  >
					<h5 class="display-5"> <?php 
					$sql = 'SELECT * FROM Vehicles where cname="BMW" ';
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
   					 while($row = $result->fetch_assoc()) {
        				echo $row["cname"]. " ONLY " . $row["ccost"]. " PER DAY" ;
    				}
					} else {
    					echo "0 results";
					} ?></h5>
  		 </div>
   			<div class="ml-auto">
   				<p class="ml-auto display-5"><?php 
					$sql = 'SELECT ccost FROM Vehicles where cname="BMW" ';
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
   					 while($row = $result->fetch_assoc()) {
        				echo $row["ccost"];
    				}
					} else {
    					echo "0 results";
					} ?>₹/day</p>
		</div>
 		 </div>
 		 <div class="row">
  			 <div  >
  			 	<p class="lead" >Rental Period : <?php 
					$sql = 'SELECT crentperiod FROM Vehicles where cname="BMW" ';
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
   					 while($row = $result->fetch_assoc()) {
        				echo $row["crentperiod"];
    				}
					} else {
    					echo "0 results";
					} ?> To <?php 
					$sql = 'SELECT crentperiod2 FROM Vehicles where cname="BMW" ';
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
   					 while($row = $result->fetch_assoc()) {
        				echo $row["crentperiod2"];
    				}
					} else {
    					echo "0 results";
					} ?></p>
  		 </div>
   			<!-- <div class="ml-auto">
   				<p class="lead" >Rental Period : 29 Mar 2019 - 29 April</p>
		</div> -->
 		 </div>
 		 <div class="row">
  			 <div  >
  			 	<p class="lead" >City : <?php 
					$sql = 'SELECT * FROM Vehicles where cname="BMW" ';
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
   					 while($row = $result->fetch_assoc()) {
        				echo $row["city"];
    				}
					} else {
    					echo "0 results";
					} ?></p>
  		 </div>
   			<div class="ml-auto">
   				<p class="lead" >Mileage : <?php 
					$sql = 'SELECT mileage FROM Vehicles where cname="BMW" ';
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
   					 while($row = $result->fetch_assoc()) {
        				echo $row["mileage"];
    				}
					} else {
    					echo "0 results";
					} ?>km/l</p>
		</div>
		<div class="ml-auto">
   				<p class="lead" >Minimun-age : <?php 
					$sql = 'SELECT min_age FROM Vehicles where cname="BMW" ';
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
   					 while($row = $result->fetch_assoc()) {
        				echo $row["min_age"];
    				}
					} else {
    					echo "0 results";
					} ?>yrs</p>
		</div>
		<div class="ml-auto">
   				<a href="#"><p class="lead" >View Details</p></a>
		</div>
		<div class="ml-auto">
   				<p class="lead">
   		 <a class="btn btn-primary btn-lg" href="#" role="button">Book Now</a>
  		</p>
		</div>
		
 		 </div>
  		 <hr class="my-4">
  		 <div>
 		 	<img class="image" src="<?php 
					$sql = 'SELECT image FROM Vehicles where cname="INNOVA" ';
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
   					 while($row = $result->fetch_assoc()) {
        				echo $row["image"];
    				}
					} else {
    					echo "0 results";
					} ?>" width="150px" height="100px">
 		 <div class="row" style="margin-bottom: 1px ; margin-top: 1px">
  			 <div  >
					<h5 class="display-5"> <?php 
					$sql = 'SELECT * FROM Vehicles where cname="INNOVA" ';
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
   					 while($row = $result->fetch_assoc()) {
        				echo $row["cname"]. " ONLY " . $row["ccost"]. " PER DAY" ;
    				}
					} else {
    					echo "0 results";
					} ?></h5>
  		 </div>
   			<div class="ml-auto">
   				<p class="ml-auto display-5"><?php 
					$sql = 'SELECT ccost FROM Vehicles where cname="INNOVA" ';
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
   					 while($row = $result->fetch_assoc()) {
        				echo $row["ccost"];
    				}
					} else {
    					echo "0 results";
					} ?>₹/day</p>
		</div>
 		 </div>
 		 <div class="row">
  			 <div  >
  			 	<p class="lead" >Rental Period : <?php 
					$sql = 'SELECT crentperiod FROM Vehicles where cname="INNOVA" ';
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
   					 while($row = $result->fetch_assoc()) {
        				echo $row["crentperiod"];
    				}
					} else {
    					echo "0 results";
					} ?> To <?php 
					$sql = 'SELECT crentperiod2 FROM Vehicles where cname="INNOVA" ';
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
   					 while($row = $result->fetch_assoc()) {
        				echo $row["crentperiod2"];
    				}
					} else {
    					echo "0 results";
					} ?></p>
  		 </div>
   			<!-- <div class="ml-auto">
   				<p class="lead" >Rental Period : 29 Mar 2019 - 29 April</p>
		</div> -->
 		 </div>
 		 <div class="row">
  			 <div  >
  			 	<p class="lead" >City : <?php 
					$sql = 'SELECT * FROM Vehicles where cname="INNOVA" ';
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
   					 while($row = $result->fetch_assoc()) {
        				echo $row["city"];
    				}
					} else {
    					echo "0 results";
					} ?></p>
  		 </div>
   			<div class="ml-auto">
   				<p class="lead" >Mileage : <?php 
					$sql = 'SELECT mileage FROM Vehicles where cname="INNOVA" ';
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
   					 while($row = $result->fetch_assoc()) {
        				echo $row["mileage"];
    				}
					} else {
    					echo "0 results";
					} ?>km/l</p>
		</div>
		<div class="ml-auto">
   				<p class="lead" >Minimun-age : <?php 
					$sql = 'SELECT min_age FROM Vehicles where cname="INNOVA" ';
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
   					 while($row = $result->fetch_assoc()) {
        				echo $row["min_age"];
    				}
					} else {
    					echo "0 results";
					} ?>yrs</p>
		</div>
		<div class="ml-auto">
   				<a href="#"><p class="lead" >View Details</p></a>
		</div>
		<div class="ml-auto">
   				<p class="lead">
   		 <a class="btn btn-primary btn-lg" href="#" role="button">Book Now</a>
  		</p>
		</div>
		
 		 </div>
  		 <hr class="my-4">
  		 <div>
 		 	<img class="image" src="<?php 
					$sql = 'SELECT image FROM Vehicles where cname="Bullet" ';
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
   					 while($row = $result->fetch_assoc()) {
        				echo $row["image"];
    				}
					} else {
    					echo "0 results";
					} ?>" width="150px" height="100px">
 		 <div class="row" style="margin-bottom: 1px ; margin-top: 1px">
  			 <div  >
					<h5 class="display-5"> <?php 
					$sql = 'SELECT * FROM Vehicles where cname="Bullet" ';
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
   					 while($row = $result->fetch_assoc()) {
        				echo $row["cname"]. " ONLY " . $row["ccost"]. " PER DAY" ;
    				}
					} else {
    					echo "0 results";
					} ?></h5>
  		 </div>
   			<div class="ml-auto">
   				<p class="ml-auto display-5"><?php 
					$sql = 'SELECT ccost FROM Vehicles where cname="Bullet" ';
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
   					 while($row = $result->fetch_assoc()) {
        				echo $row["ccost"];
    				}
					} else {
    					echo "0 results";
					} ?>₹/day</p>
		</div>
 		 </div>
 		 <div class="row">
  			 <div  >
  			 	<p class="lead" >Rental Period : <?php 
					$sql = 'SELECT crentperiod FROM Vehicles where cname="Bullet" ';
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
   					 while($row = $result->fetch_assoc()) {
        				echo $row["crentperiod"];
    				}
					} else {
    					echo "0 results";
					} ?> To <?php 
					$sql = 'SELECT crentperiod2 FROM Vehicles where cname="Bullet" ';
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
   					 while($row = $result->fetch_assoc()) {
        				echo $row["crentperiod2"];
    				}
					} else {
    					echo "0 results";
					} ?></p>
  		 </div>
   			<!-- <div class="ml-auto">
   				<p class="lead" >Rental Period : 29 Mar 2019 - 29 April</p>
		</div> -->
 		 </div>
 		 <div class="row">
  			 <div  >
  			 	<p class="lead" >City : <?php 
					$sql = 'SELECT * FROM Vehicles where cname="Bullet" ';
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
   					 while($row = $result->fetch_assoc()) {
        				echo $row["city"];
    				}
					} else {
    					echo "0 results";
					} ?></p>
  		 </div>
   			<div class="ml-auto">
   				<p class="lead" >Mileage : <?php 
					$sql = 'SELECT mileage FROM Vehicles where cname="Bullet" ';
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
   					 while($row = $result->fetch_assoc()) {
        				echo $row["mileage"];
    				}
					} else {
    					echo "0 results";
					} ?>km/l</p>
		</div>
		<div class="ml-auto">
   				<p class="lead" >Minimun-age : <?php 
					$sql = 'SELECT min_age FROM Vehicles where cname="Bullet" ';
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
   					 while($row = $result->fetch_assoc()) {
        				echo $row["min_age"];
    				}
					} else {
    					echo "0 results";
					} ?>yrs</p>
		</div>
		<div class="ml-auto">
   				<a href="#"><p class="lead" >View Details</p></a>
		</div>
		<div class="ml-auto">
   				<p class="lead">
   		 <a class="btn btn-primary btn-lg" href="#" role="button">Book Now</a>
  		</p>
		</div>
		
 		 </div>
  		 <hr class="my-4">
  		 <div>
 		 	<img class="image" src="<?php 
					$sql = 'SELECT image FROM Vehicles where cname="BMW" ';
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
   					 while($row = $result->fetch_assoc()) {
        				echo $row["image"];
    				}
					} else {
    					echo "0 results";
					} ?>" width="150px" height="100px">
 		 <div class="row" style="margin-bottom: 1px ; margin-top: 1px">
  			 <div  >
					<h5 class="display-5"> <?php 
					$sql = 'SELECT * FROM Vehicles where cname="BMW" ';
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
   					 while($row = $result->fetch_assoc()) {
        				echo $row["cname"]. " ONLY " . $row["ccost"]. " PER DAY" ;
    				}
					} else {
    					echo "0 results";
					} ?></h5>
  		 </div>
   			<div class="ml-auto">
   				<p class="ml-auto display-5"><?php 
					$sql = 'SELECT ccost FROM Vehicles where cname="BMW" ';
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
   					 while($row = $result->fetch_assoc()) {
        				echo $row["ccost"];
    				}
					} else {
    					echo "0 results";
					} ?>₹/day</p>
		</div>
 		 </div>
 		 <div class="row">
  			 <div  >
  			 	<p class="lead" >Rental Period : <?php 
					$sql = 'SELECT crentperiod FROM Vehicles where cname="BMW" ';
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
   					 while($row = $result->fetch_assoc()) {
        				echo $row["crentperiod"];
    				}
					} else {
    					echo "0 results";
					} ?> To <?php 
					$sql = 'SELECT crentperiod2 FROM Vehicles where cname="BMW" ';
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
   					 while($row = $result->fetch_assoc()) {
        				echo $row["crentperiod2"];
    				}
					} else {
    					echo "0 results";
					} ?></p>
  		 </div>
   			<!-- <div class="ml-auto">
   				<p class="lead" >Rental Period : 29 Mar 2019 - 29 April</p>
		</div> -->
 		 </div>
 		 <div class="row">
  			 <div  >
  			 	<p class="lead" >City : <?php 
					$sql = 'SELECT * FROM Vehicles where cname="BMW" ';
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
   					 while($row = $result->fetch_assoc()) {
        				echo $row["city"];
    				}
					} else {
    					echo "0 results";
					} ?></p>
  		 </div>
   			<div class="ml-auto">
   				<p class="lead" >Mileage : <?php 
					$sql = 'SELECT mileage FROM Vehicles where cname="BMW" ';
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
   					 while($row = $result->fetch_assoc()) {
        				echo $row["mileage"];
    				}
					} else {
    					echo "0 results";
					} ?></p>
		</div>
		<div class="ml-auto">
   				<p class="lead" >Minimun-age : <?php 
					$sql = 'SELECT min_age FROM Vehicles where cname="BMW" ';
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
   					 while($row = $result->fetch_assoc()) {
        				echo $row["min_age"];
    				}
					} else {
    					echo "0 results";
					} ?>yrs</p>
		</div>
		<div class="ml-auto">
   				<a href="#"><p class="lead" >View Details</p></a>
		</div>
		<div class="ml-auto">
   				<p class="lead">
   		 <a class="btn btn-primary btn-lg" href="#" role="button">Book Now</a>
  		</p>
		</div>
		
 		 </div>
  		 <hr class="my-4">
  		 <div>
 		 	<img class="image" src="<?php 
					$sql = 'SELECT image FROM Vehicles where cname="BMW" ';
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
   					 while($row = $result->fetch_assoc()) {
        				echo $row["image"];
    				}
					} else {
    					echo "0 results";
					} ?>" width="150px" height="100px">
 		 <div class="row" style="margin-bottom: 1px ; margin-top: 1px">
  			 <div  >
					<h5 class="display-5"> <?php 
					$sql = 'SELECT * FROM Vehicles where cname="BMW" ';
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
   					 while($row = $result->fetch_assoc()) {
        				echo $row["cname"]. " ONLY " . $row["ccost"]. " PER DAY" ;
    				}
					} else {
    					echo "0 results";
					} ?></h5>
  		 </div>
   			<div class="ml-auto">
   				<p class="ml-auto display-5"><?php 
					$sql = 'SELECT ccost FROM Vehicles where cname="BMW" ';
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
   					 while($row = $result->fetch_assoc()) {
        				echo $row["ccost"];
    				}
					} else {
    					echo "0 results";
					} ?>₹/day</p>
		</div>
 		 </div>
 		 <div class="row">
  			 <div  >
  			 	<p class="lead" >Rental Period : <?php 
					$sql = 'SELECT crentperiod FROM Vehicles where cname="BMW" ';
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
   					 while($row = $result->fetch_assoc()) {
        				echo $row["crentperiod"];
    				}
					} else {
    					echo "0 results";
					} ?> To <?php 
					$sql = 'SELECT crentperiod2 FROM Vehicles where cname="BMW" ';
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
   					 while($row = $result->fetch_assoc()) {
        				echo $row["crentperiod2"];
    				}
					} else {
    					echo "0 results";
					} ?></p>
  		 </div>
   			<!-- <div class="ml-auto">
   				<p class="lead" >Rental Period : 29 Mar 2019 - 29 April</p>
		</div> -->
 		 </div>
 		 <div class="row">
  			 <div  >
  			 	<p class="lead" >City : <?php 
					$sql = 'SELECT * FROM Vehicles where cname="BMW" ';
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
   					 while($row = $result->fetch_assoc()) {
        				echo $row["city"];
    				}
					} else {
    					echo "0 results";
					} ?></p>
  		 </div>
   			<div class="ml-auto">
   				<p class="lead" >Mileage : <?php 
					$sql = 'SELECT mileage FROM Vehicles where cname="BMW" ';
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
   					 while($row = $result->fetch_assoc()) {
        				echo $row["mileage"];
    				}
					} else {
    					echo "0 results";
					} ?></p>
		</div>
		<div class="ml-auto">
   				<p class="lead" >Minimun-age : <?php 
					$sql = 'SELECT min_age FROM Vehicles where cname="BMW" ';
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
   					 while($row = $result->fetch_assoc()) {
        				echo $row["min_age"];
    				}
					} else {
    					echo "0 results";
					} ?>yrs</p>
		</div>
		<div class="ml-auto">
   				<a href="#"><p class="lead" >View Details</p></a>
		</div>
		<div class="ml-auto">
   				<p class="lead">
   		 <a class="btn btn-primary btn-lg" href="#" role="button">Book Now</a>
  		</p>
		</div>
		
		</div>
  		 <hr class="my-4">
  		 <div>
 		 	<img class="image" src="<?php 
					$sql = 'SELECT image FROM Vehicles where cname="BMW" ';
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
   					 while($row = $result->fetch_assoc()) {
        				echo $row["image"];
    				}
					} else {
    					echo "0 results";
					} ?>" width="150px" height="100px">
 		 <div class="row" style="margin-bottom: 1px ; margin-top: 1px">
  			 <div  >
					<h5 class="display-5"> <?php 
					$sql = 'SELECT * FROM Vehicles where cname="BMW" ';
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
   					 while($row = $result->fetch_assoc()) {
        				echo $row["cname"]. " ONLY " . $row["ccost"]. " PER DAY" ;
    				}
					} else {
    					echo "0 results";
					} ?></h5>
  		 </div>
   			<div class="ml-auto">
   				<p class="ml-auto display-5"><?php 
					$sql = 'SELECT ccost FROM Vehicles where cname="BMW" ';
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
   					 while($row = $result->fetch_assoc()) {
        				echo $row["ccost"];
    				}
					} else {
    					echo "0 results";
					} ?>₹/day</p>
		</div>
 		 </div>
 		 <div class="row">
  			 <div  >
  			 	<p class="lead" >Rental Period : <?php 
					$sql = 'SELECT crentperiod FROM Vehicles where cname="BMW" ';
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
   					 while($row = $result->fetch_assoc()) {
        				echo $row["crentperiod"];
    				}
					} else {
    					echo "0 results";
					} ?> To <?php 
					$sql = 'SELECT crentperiod2 FROM Vehicles where cname="BMW" ';
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
   					 while($row = $result->fetch_assoc()) {
        				echo $row["crentperiod2"];
    				}
					} else {
    					echo "0 results";
					} ?></p>
  		 </div>
   			<!-- <div class="ml-auto">
   				<p class="lead" >Rental Period : 29 Mar 2019 - 29 April</p>
		</div> -->
 		 </div>
 		 <div class="row">
  			 <div  >
  			 	<p class="lead" >City : <?php 
					$sql = 'SELECT * FROM Vehicles where cname="BMW" ';
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
   					 while($row = $result->fetch_assoc()) {
        				echo $row["city"];
    				}
					} else {
    					echo "0 results";
					} ?></p>
  		 </div>
   			<div class="ml-auto">
   				<p class="lead" >Mileage : <?php 
					$sql = 'SELECT mileage FROM Vehicles where cname="BMW" ';
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
   					 while($row = $result->fetch_assoc()) {
        				echo $row["mileage"];
    				}
					} else {
    					echo "0 results";
					} ?></p>
		</div>
		<div class="ml-auto">
   				<p class="lead" >Minimun-age : <?php 
					$sql = 'SELECT min_age FROM Vehicles where cname="BMW" ';
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
   					 while($row = $result->fetch_assoc()) {
        				echo $row["min_age"];
    				}
					} else {
    					echo "0 results";
					} ?>yrs</p>
		</div>
		<div class="ml-auto">
   				<a href="#"><p class="lead" >View Details</p></a>
		</div>
		<div class="ml-auto">
   				<p class="lead">
   		 <a class="btn btn-primary btn-lg" href="#" role="button">Book Now</a>
  		</p>
		</div>
		       
		</div>
  		 <hr class="my-4">
  		 <div>
 		 	<img class="image" src="<?php 
					$sql = 'SELECT image FROM Vehicles where cname="BMW" ';
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
   					 while($row = $result->fetch_assoc()) {
        				echo $row["image"];
    				}
					} else {
    					echo "0 results";
					} ?>" width="150px" height="100px">
 		 <div class="row" style="margin-bottom: 1px ; margin-top: 1px">
  			 <div  >
					<h5 class="display-5"> <?php 
					$sql = 'SELECT * FROM Vehicles where cname="BMW" ';
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
   					 while($row = $result->fetch_assoc()) {
        				echo $row["cname"]. " ONLY " . $row["ccost"]. " PER DAY" ;
    				}
					} else {
    					echo "0 results";
					} ?></h5>
  		 </div>
   			<div class="ml-auto">
   				<p class="ml-auto display-5"><?php 
					$sql = 'SELECT ccost FROM Vehicles where cname="BMW" ';
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
   					 while($row = $result->fetch_assoc()) {
        				echo $row["ccost"];
    				}
					} else {
    					echo "0 results";
					} ?>₹/day</p>
		</div>
 		 </div>
 		 <div class="row">
  			 <div  >
  			 	<p class="lead" >Rental Period : <?php 
					$sql = 'SELECT crentperiod FROM Vehicles where cname="BMW" ';
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
   					 while($row = $result->fetch_assoc()) {
        				echo $row["crentperiod"];
    				}
					} else {
    					echo "0 results";
					} ?> To <?php 
					$sql = 'SELECT crentperiod2 FROM Vehicles where cname="BMW" ';
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
   					 while($row = $result->fetch_assoc()) {
        				echo $row["crentperiod2"];
    				}
					} else {
    					echo "0 results";
					} ?></p>
  		 </div>
   			<!-- <div class="ml-auto">
   				<p class="lead" >Rental Period : 29 Mar 2019 - 29 April</p>
		</div> -->
 		 </div>
 		 <div class="row">
  			 <div  >
  			 	<p class="lead" >City : <?php 
					$sql = 'SELECT * FROM Vehicles where cname="BMW" ';
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
   					 while($row = $result->fetch_assoc()) {
        				echo $row["city"];
    				}
					} else {
    					echo "0 results";
					} ?></p>
  		 </div>
   			<div class="ml-auto">
   				<p class="lead" >Mileage : <?php 
					$sql = 'SELECT mileage FROM Vehicles where cname="BMW" ';
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
   					 while($row = $result->fetch_assoc()) {
        				echo $row["mileage"];
    				}
					} else {
    					echo "0 results";
					} ?></p>
		</div>
		<div class="ml-auto">
   				<p class="lead" >Minimun-age : <?php 
					$sql = 'SELECT min_age FROM Vehicles where cname="BMW" ';
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
   					 while($row = $result->fetch_assoc()) {
        				echo $row["min_age"];
    				}
					} else {
    					echo "0 results";
					} ?>yrs</p>
		</div>
		<div class="ml-auto">
   				<a href="#"><p class="lead" >View Details</p></a>
		</div>
		<div class="ml-auto">
   				<p class="lead">
   		 <a class="btn btn-primary btn-lg" href="#" role="button">Book Now</a>
  		</p>
		</div>
		       
 		 </div>
  		 <hr class="my-4">
  		 <div>
  <ul class="pagination">
    <li class="page-item disabled">
      <a class="page-link" href="#">&laquo;</a>
    </li>
    <li class="page-item active">
      <a class="page-link" href="#">1</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#">2</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#">3</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#">4</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#">5</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#">&raquo;</a>
    </li>
  </ul>
</div>
  		 
	</div>
	<?php include 'footer.php'; ?>
</body>
</html>