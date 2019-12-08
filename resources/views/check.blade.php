<!DOCTYPE html>
<html>
<head>
	<title>Logout</title>
</head>
<body>
	
	
	<?php  
	
    
      session_start();
      <input type="submit" name="Logout" value="Logout">
      session_unset();
      session_destroy();
      header("Location:../login");
     exit;
    
    ?>
</body>
</html>