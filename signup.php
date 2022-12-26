<!DOCTYPE html>
<html>
<head>
	<title>SIGN UP</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<image>
        <img src= "picture 1.png" width="250">
    
     <form action="signup-check.php" method="post">
     	<h2>SIGN UP</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

		 <?php if (isset($_GET['success'])) { ?>
     		<p class="success"><?php echo $_GET['success']; ?></p>
     	<?php } ?>


		 <label> Name</label>
		 <?php if (isset($_GET['name'])) { ?>	
			 <input type="text" 
			 		name="name" 
					placeholder="Name"
					value="<?php echo $_GET['name']; ?>"><br>
     	<?php }else{ ?>
			<input type="text" 
				   name="name" 
				   placeholder="Name"><br>
		<?php }?>

		<label>Email</label> 
		<?php if (isset($_GET['uname'])) { ?>	
			 <input type="text" 
			 		name="uname" 
					placeholder="Email"
					value="<?php echo $_GET['uname']; ?>"><br>
     	<?php }else{ ?>
			<input type="text" 
				   name="uname" 
				   placeholder="Email"><br>
		<?php }?>




     	<label>Password</label>
     	<input type="password" 
				name="password" 
				placeholder="Type Email Password"><br>

         <label>Re Password</label>
     	<input type="password" 
				name="re_password" 
				placeholder="Re_ Email Password"><br>


     	<button type="submit">Sign up</button>
		<a href="index.php" class="ca">Already have an account? </a>
    
	</form>
	 <class="panel-footer text-right">
	 <small>&copy; 2023 UniqueCrazy</small>
</body>
</html>