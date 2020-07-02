<?php

if(isset($_SESSION['userlogin'])){
	header("Location: ./client_dashboard.php");
}

require_once('config.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Sign Up </title>
	<link rel="stylesheet" type="text/css" href="../assets/css/sign_up.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<div>
	<?php
	
	?>	
</div>

<body>
	<img class="wave" src="../assets/images/wave.png">
	<div class="container">
		<div class="img">
			<img src="../assets/images/bg.svg">
		</div>
		<div class="login-content">
			<form action="sign_up.php" method="post">
				<img src="../assets/images/avatar.svg">
				<h2 class="title">Hello</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
							  <h5>First Name</h5>					  
           		   		<input id="firstname" type="text" name="firstname" class="input" required> 
           		   </div>
				</div>
				<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
				   <div class="div">
							  <h5>Last Name </h5>					  
           		   		<input id="lastname" type="text" name="lastname" class="input" required> 
           		   </div>
				</div>
				<div class="input-div one">
					<div class="i">
							<i class="fas fa-user"></i>
					</div>
					<div class="div">
							<h5>Email Address</h5>
							<input id="email" type="email" name="email" class="input" required> 
					</div>
				</div>
				<div class="input-div one">
					<div class="i">
							<i class="fas fa-user"></i>
					</div>
					<div class="div">
							<h5>Phone Number</h5>
							<input id="phonenumber" type="text" name="email" class="input" required> 
					</div>
				</div>
				<div class="input-div one">
					<div class="i">
							<i class="fas fa-user"></i>
					</div>
					<div class="div">
							<h5>Password</h5>
							<input type="password" class="input">
					</div>
				 </div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Confirm Password</h5>
           		    	<input type="password" class="input">
            	   </div>
				</div>
				<hr class="div">
					<label>Location:</label><br>
        
            <select name="Location">
                    <option value="-1">Select Location</option>
                    <option value="1">Accra</option>
                    <option value="2">Cape Coast</option>
                    <option value="3">Takoradi</option>
                    <option value="4">Ho</option>
                    <option value="5">Koforidua</option>
                    <option value="6">Kumasi</option>
                    <option value="7">Sunyani</option>
                    <option value="8">Tamale</option>
                    <option value="9">Bolgatanga</option>
                    <option value="10">Wa</option>
            </select><br>
				<input class="btn" type="submit" id="register" name="create" value="Sign Up">
            </form>
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script type="text/javascript">
	$(function(){
		$('#register').click(function(e){

			var valid = this.form.checkValidity();

			if(valid){


			var firstname 	= $('#firstname').val();
			var lastname	= $('#lastname').val();
			var email 		= $('#email').val();
			var phonenumber = $('#phonenumber').val();
			var password 	= $('#password').val();
			

				e.preventDefault();	

				$.ajax({
					type: 'POST',
					url: 'process.php',
					data: {firstname: firstname,lastname: lastname,email: email,phonenumber: phonenumber,password: password},
					success: function(data){
					Swal.fire({
								'title': 'Successful',
								'text': data,
								'type': 'success'
								})
							
					},
					error: function(data){
						Swal.fire({
								'title': 'Errors',
								'text': 'There were errors while saving the data.',
								'type': 'error'
								})
					}
				});

				
			}else{
				
			}

			



		});		

		
	});
	
</script>
    </div>
    <script type="text/javascript" src="../assets/js/login.js"></script>
</body>
</html>
