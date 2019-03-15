<html>
<head>
	<title>Login Page</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<p align="center">
<span class="blinking">YOU HAVE BEEN HACKED!!!</span>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Sign In</h3>
				<div class="d-flex justify-content-end social_icon">
					<span><i class="fab fa-facebook-square"></i></span>
					<span><i class="fab fa-google-plus-square"></i></span>
					<span><i class="fab fa-twitter-square"></i></span>
				</div>
			</div>
			<div class="card-body">
               <form action = "" method = "post">

                  <label style = "color:#FFFFFF !important;">UserName  :</label><input type = "text" name = "username" class = "box text1"/><br /><br />
                  <label style="color:#FFFFFF !important;">Password  :</label><input type = "password" name = "password" class = "box text1" /><br/><br />
				   <p align="center">
                  <input type = "submit" value = " Submit "/><br />
				  <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo (!empty($error)) ? $error : ''; ?></div>
               </form>
			   
			
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					Don't have an account?<a href="#" style="color:#FFFFFF !important;" >Sign Up</a>
				</div>
				<div class="d-flex justify-content-center">
					<a href="#" style="color:#FFFFFF !important;">Forgot your password?</a>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>