<img class="wave" src="../assets/images/wave.png">
	<div class="container">

    <a class="img" href="../index.php" >
            <img src="../assets/images/bg.svg" alt="homepage">
</a>
        
		<div class="login-content">
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
               <img src="../assets/images/avatar.svg">
                

         </li>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Username</label>
                <input type="text" name="username" class="input" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
                   </div>
                   </div>
                
                   <div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
                
            <div class="div <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="password" class="input">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>

            </div>
            <div class="div">
            <a href="forgot-password.html">Forgot Password?</a>
                <input type="submit" class="btn btn-primary" value="Login">
            </div>
                <a href="adminlogin.php">Log in as Admin</a>
                <a href="register.php">Sign Up</a>   

                </form>
        </div>
    </div>
    <script type="text/javascript" src="../assets/js/login.js"></script>