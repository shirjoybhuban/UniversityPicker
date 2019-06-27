<?php  
require 'includes/header.php';
$resultpublic = mysqli_query($con,"SELECT * FROM university  WHERE type='public' ORDER BY rank LIMIT 5" );
$resultprivate = mysqli_query($con,"SELECT * FROM university  WHERE type='private' ORDER BY rank LIMIT 5" );
?>
    <!DOCTYPE html>
    <html>

    <head>
        <title>University Search</title>
        <script type="text/javascript">
            function showUni(str) {

                var ajaxRequest; // The variable that makes Ajax possible!

                if (str == "") {
                    document.getElementById("txtHint").innerHTML = "Nothing found ";

                    return;
                } else {

                    try {

                        ajaxRequest = new XMLHttpRequest();
                    } catch (e) {

                        try {
                            ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
                        } catch (e) {
                            try {
                                ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
                            } catch (e) {
                                // Something went wrong
                                alert("Your browser broke!");
                                return false;
                            }
                        }
                    }
                }

                // Create a function that will receive data sent from the server
                ajaxRequest.onreadystatechange = function() {
                    if (ajaxRequest.readyState == 4) {
                        var ajaxDisplay = document.getElementById('txtHint');
                        ajaxDisplay.innerHTML = ajaxRequest.responseText;
                    }
                }
                ajaxRequest.open("GET", "unifetch.php?p=" + str, true);
                ajaxRequest.send(null);
            }
        </script>
    </head>

    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-8" style="align-items: center;">

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">

                        </div>
                        <input type="text" name="users" class="form-control" placeholder="Search" onkeyup="showUni(this.value)">
                        <div id="txtHint">
                            <b>Searched  University list here :</b>

                        </div>
                    </div>
                </div>
            </div>
            
            	  <div id='public'>
            	  	<h3>Public Universities</h3>
                <?php
            while($row = mysqli_fetch_array($resultpublic))
            { ?>
                    <div class="card-deck" style="width: 650px">
                        <div class="card" >
                            <img class="card-img-top" src=".../100px180/" alt="Card image cap">
                            <div class="card-body">
                                </a>
                                <h5 class="card-title"><?php echo $row['name'];?></h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                           
                        </div>
                    </div>
                    <?php } ?>
            </div>
           
         	<h3>Private Universities</h3>
            <div id='private'>
                <?php
            while($row = mysqli_fetch_array($resultprivate))
            { ?>
                    <div class="card-deck" style="width: 650px">
                        <div class="card">
                            <img class="card-img-top" src=".../100px180/" alt="Card image cap">
                            <div class="card-body">
                                </a>
                                <h5 class="card-title"><?php echo $row['name'];?></h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                            
                        </div>
                    </div>
                    <?php } ?>
            </div>

        </div>

    </body>

    </html>