<?php
	session_start(); 
	if((!isset($_SESSION["success"])))
	{
		header("location:index.php");
		exit();
	}
	if(isset($_POST['csrf']) && isset($_COOKIE['csrf_token'])){
		if($_POST['csrf'] == $_COOKIE['csrf_token']){
			echo "Successfully Logout..!!";
			session_destroy();
		}
		else{
			echo "CSRF Check Failed..!!";
		}
	}
	
?>
<body style="background-image:url('sahara.jpg');color:white;">
    
    <!--
<div class="container">
    <div class="row" align="center" style="padding-top: 170px;">
        <div class="col-12">
                <h1 style="font-size: 40px; ">Cross-site Request Forgery Double Submit Cookie</h1> 
        </div>
    </div>
    <div class="row" align="center" style="padding-top: 20px;">
        <div class="col-12">
                <h2 style="font-size: 50px;"></h2>  
        </div>
    </div>
    <div class="row" align="center" style="padding-top: 10px;">
        <div class="col-12">
                <div class="anime">
                    K.K.Y.V.Samarawickrama : IT16547452
                </div>
                <div class="anime">
                    3 rd Year Cyber Security
                </div>  
        </div>
    </div>

</div>
    
    -->
    </body>