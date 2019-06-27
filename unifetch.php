<?php 
require 'config/db_connection.php';
	$p=$_GET["p"]; 

		$result2 = mysqli_query($con,"SELECT * FROM university WHERE  name LIKE '$p%'" );

	 while($row = mysqli_fetch_array($result2))
		{
		echo "<img src=" . $row['image'] . ">";
		echo "<h1>University name : " . $row['name'] . "</h1>";
		echo "<h1>University location : " . $row['location'] . "</h1>";
		echo "<h1>University website : <a href=". $row['website']. ">Click Here</a></h1>";
		echo "<h1>University type : " . $row['type'] . "</h1>";
		echo "<br><br>";
		}
 ?>
