<?php
require_once "controllers/product-controller.php";
$username=$_GET["pname"];
$res = checkUsernameValidity($username);
echo $res;

?>