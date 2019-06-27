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