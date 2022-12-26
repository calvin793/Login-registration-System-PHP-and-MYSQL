<!DOCTYPE html>
<html>
<head>
    <title>LOGIN</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <image>
        <img src= "picture 1.png" width="250">
    
     <form action="login.php" method="post">
        <h2>LOGIN</h2>
        <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>
        <label>Email</label>
        <input type="text" name="uname" placeholder="Email"><br>

        <label>Password</label>
        <input type="password" name="password" placeholder="Email Password">
<span class="focus-input100" data-symbol="&#xf190;"></span>
                    </div>

<br>

        <button type="submit">Login</button>
        <a href="signup.php" class="ca">Create an account</a>
     </form>
     <class="panel-footer text-right">
	 <small>&copy; 2023 UniqueCrazy</small>
</body>
</html>

