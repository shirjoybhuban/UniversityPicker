<?php 
	require 'includes/header.php';
?>
	


	<!DOCTYPE html>
	<html>
	<head>
		<title>Universities</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="table/css/util.css">
		<link rel="stylesheet" type="text/css" href="table/css/main.css">
	</head>
	<body>
		<button type="" onclick="test()">btn</button>
	    <form> 
			<p>Public or private</p>
		    <select name="users" onchange="showResult(this.value)"> 
		    <!-- <option value="">ALL</option>  -->
		    <option value="public">public </option> 
		    <option value="private">private </option> 
		    
		    </select><br />
	    </form> <br /> 
	    <div id="txtHint"><b>University list here :</b></div>  

		<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<script>
	function  test(){
		alert("BBN");
	}
</script>
 <script type="text/javascript"> 
    function showResult(str){


    	var ajaxRequest;  // The variable that makes Ajax possible!

    	if (str=="") {   
    		document.getElementById("txtHint").innerHTML="  "; 

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







	<?php 
allResult(); // call to acces this funtion
function allResult() {

	$con = mysqli_connect("localhost", "root", "", "universitypicker"); //for this function

	if ($_SESSION['medium']=="bangla") { 

		 $sscgpa=$_SESSION['sscgpa'];
		 

		$hscgpa=$_SESSION['hscgpa'];

		
		$department=$_SESSION['department'];
		
		$total=$sscgpa+$hscgpa;
		
		$result = mysqli_query($con,"SELECT * FROM university JOIN universityinfo ON university.id=universityinfo.universityid WHERE hscgpa <='$hscgpa' AND sscgpa <='$sscgpa' AND hscssctotal <='$total' AND 
			department='$department' " );
		

		// AND department ='$department'

	}
	else{
		$olevel=$_SESSION['olevel'];
		$alevel=$_SESSION['alevel'];
			
		$result = mysqli_query($con,"SELECT * FROM university JOIN universityinfo ON university.id=universityinfo.universityid WHERE olevel <='$olevel' AND alevel <='$alevel' " );
	}
	
	?>





		<div id='full'>

		
		
				<div class="limiter">
			<div class="container-table100">
				<div class="wrap-table100">
					
					
			

					<div class="table100 ver3 m-b-110">
						<div class="table100-head">
							<table>
								<thead>
									<tr class="row100 head">
										<th class="cell100 column1">Image</th>
										<th class="cell100 column2">University Name</th>
										<th class="cell100 column3">Location</th>
										<th class="cell100 column4">Website</th>
										<th class="cell100 column5">Type</th>
									</tr>
								</thead>
							</table>
						</div>
						 <div class="table100-body js-pscroll">
						 	<?php while($row = mysqli_fetch_array($result)) 
			{  
				?>		
			
						 	<table>
								<tbody>
									<tr class="row100 body">
										<td class="cell100 column1"><img src="<?php echo $row['image']; ?>" height="110" width="200"></td>
										<td class="cell100 column2"><?php echo $row['name']; ?> </td>
										<td class="cell100 column3"> <?php  echo $row['location'];  ?></td>
										<td class="cell100 column4"><a href="<?php echo $row['website']; ?>"><?php echo $row['website']; ?></td>
										<td class="cell100 column5"> <?php echo $row['type'];  ?></td>		
										
									
									</tr>

								</tbody>
								
									

							</table>	



	<?php 
			
			} ?>				
						</div>			
					</div>

					
				
			</div>
		</div>


			

		</div>

<?php 	
	
}



 ?>



  
						
</body>
</html>
