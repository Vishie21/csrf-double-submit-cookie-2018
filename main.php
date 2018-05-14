<?php
	session_start();
	if(!isset($_SESSION["success"]))
	{
		header("location:index.php");
		exit();
	}
	setcookie("csrf_token","");	
	setcookie("csrf_token",md5(mt_rand()+time()));
?>

<html>
	<head> 
		<title>
			Login
		</title>
	</head>
	<body style="background-image:url('sahara.jpg');color:white;">
		<form id="LOGOUT_00" method="POST" action="logout.php">
		
		<?php if(isset($error)){echo $error."<br>";}?>
			
			<input type="submit" value="Logout"/> 			
		</form>
            
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
                    K.K.Y.V.Samarawickrama : IT 16547452
                </div>
                <div class="anime">
                    3 rd Year Cyber Security
                </div>  
        </div>
    </div>

</div>
            
         -->   
            
	</body>
	
	<script>
		window.onload=getToken();
		function getToken(){
			var form = document.getElementById("LOGOUT_00");
			var token = document.createElement("input");
			token.setAttribute("type", "hidden");
			token.setAttribute("name", "csrf");
			token.setAttribute("value", getCookie("csrf_token"));
			form.appendChild(token);
		}
		
		function getCookie(name) {
			var value = "; " + document.cookie;
			var parts = value.split("; " + name + "=");
			if (parts.length == 2){
				return parts.pop().split(";").shift();
			}
		}

	</script>
	
</html>