<?php 
require_once "controllers/login-controller.php";
?>

<!--login starts -->

<html> 
<head> </head>
<body>
<form action="" method="post">
	<h1>Inventory Manager Login</h1>
<input type="text" name="username"  placeholder="username">
<span id="err_username"></span> <br>
<input type="password" name="password" placeholder="password"><br>
<input type="submit" name="btn_login" value="login"> 

</form>
</body>
</html>

<!--login ends -->

