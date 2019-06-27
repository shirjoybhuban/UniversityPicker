
<?php 
require 'includes/header.php';
?>
<html> 
 	<head> 
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
 	<link rel="stylesheet" type="text/css" href="table/css/util.css">
	<link rel="stylesheet" type="text/css" href="table/css/main.css">

 </head> 
    <body>  
    <form> 
		<p>Public or private</p>
	    <select name="users" onchange="showResult(this.value)"> 
	    <option value="">ALL</option> 
	    <option value="public">public </option> 
	    <option value="private">private </option> 
	    
	    </select><br />
    </form> <br /> 
<!-- <input type="text" name="users" onkeyup="showResult(this.value)"> -->

    <div id="txtHint"><b>University list here :</b></div>  

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script type="text/javascript"> 
	    function showResult(str){

	    	var ajaxRequest;  // The variable that makes Ajax possible!

	    	if (str=="") {   
	    		document.getElementById("txtHint").innerHTML="  <?php allResult(); ?>  "; 
	    		return;   
	    	}  

	    	else{
	    		document.getElementById("full").style.display = "none";

	    		try{
	   	    		ajaxRequest = new XMLHttpRequest();
		    	} catch (e){
		    		// Internet Explorer Browsers
		    		try{
		    			ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
		    		} catch (e) {
		    			try{
		    				ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
		    			} catch (e){
		    				// Something went wrong
		    				alert("Your browser broke!");
		    				return false;
		    			}
		    		}
		    	}
	    	}	
	    	    	
	    	ajaxRequest.onreadystatechange = function(){
	    		if(ajaxRequest.readyState == 4){
	    			var ajaxDisplay = document.getElementById('txtHint');
	    			ajaxDisplay.innerHTML = ajaxRequest.responseText;
	    		}
	    	}
	    	ajaxRequest.open("GET","fetch.php?q="+str,true); 
	    	ajaxRequest.send(null); 
	    }
   	
    </script> 




    
</body> 
</html>

<?php 
allResult(); // call to acces this funtion
function allResult() {

	$con = mysqli_connect("localhost", "root", "", "universitypicker"); //for this function

	if ($_SESSION['medium']=="bangla") { 

		 $sscgpa=$_SESSION['sscgpa'];
		 // echo  $sscgpa;

		$hscgpa=$_SESSION['hscgpa'];

		// echo  $hscgpa;
		$department=$_SESSION['department'];
		// echo $department;
		$total=$sscgpa+$hscgpa;
		// echo $total;
		$result = mysqli_query($con,"SELECT * FROM university JOIN universityinfo ON university.id=universityinfo.universityid WHERE hscgpa <='$hscgpa' AND sscgpa <='$sscgpa' AND hscssctotal <='$total' AND 
			department='$department' " );

		// AND department ='$department'

	}
	else{
		$olevel=$_SESSION['olevel'];
		$alevel=$_SESSION['alevel'];
			
		$result = mysqli_query($con,"SELECT * FROM university JOIN universityinfo ON university.id=universityinfo.universityid WHERE olevel <='$olevel' AND alevel <='$alevel' " );
	}
	
	echo"<div id='full'>";

	while($row = mysqli_fetch_array($result))
	{

		echo "<img src=" . $row['image'] . ">";
		echo "<h1>University name : " . $row['name'] . "</h1>";
		echo "<h1>University location : " . $row['location'] . "</h1>";
		echo "<h1>University website : <a href=". $row['website']. "> " . $row['website']. " </a></h1>";
		echo "<h1>University type : " . $row['type'] . "</h1>";
		echo "<br><br>";

	}

	echo"</div>";
	return;
}

 ?>