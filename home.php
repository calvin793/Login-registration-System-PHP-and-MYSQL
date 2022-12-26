<?php 
session_start();
include "db_conn.php";

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <h1>Hello,
     
     <?php echo $_SESSION['name']; ?></h1>



      
     <div class="row">
   
    
 
              
                  <h3>Welcome To Smartvink</h3>
                  <br><br><br><br><br><br><br><br><br><br><br><br><br>
                   <button> <a href="demo/index.html">Browse Now</a></button>

                   <button><a href="logout.php">Logout</a></button>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>