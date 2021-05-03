<?php
require_once "models/db-config.php";

//validation
            
		    $name="";
			$err_name="";
			$uname="";
			$err_uname="";
			$password="";
			$err_password="";
			$email="";
			$err_email="";
			$hasError=false;

			
			
				    if(isset($_POST["add-manager"])){

				
			    
				if(empty($_POST["uname"])){
					$err_uname="*Username Required";
					$hasError=true;
				}
				else if(strlen($_POST["uname"]) < 6){
					$err_uname="*Username should be at least 6 characters";
					$hasError=true;
				}
				else if(strpos($_POST["uname"]," ")){
					$err_uname="*Space is not allowed";
                    $hasError=true;

				}
				else{
					$uname=htmlspecialchars($_POST["uname"]);
				}
				if(empty($_POST["name"])){
					$err_name="*Name Required";
					$hasError=true;
				}
				else if(strlen($_POST["name"]) < 3){
					$err_name="*Name should be at least 3 characters";
					$hasError=true;
				}
				else if(is_numeric($_POST["name"])){
					$err_name="*Only string value is accepted";
					$hasError=true;
				}
				else{
					$name=htmlspecialchars($_POST["name"]);
				}
				if(empty($_POST["pass"])){
					$err_password = "*Password Required";
					$hasError=true;
				}
				else if(strlen($_POST["pass"]) < 8){
					$err_password="*Password should be at least 8 characters";
					$hasError=true;
				}
				
				
				else{
					$password=$_POST["pass"];
				}
				
				
				if(empty($_POST["email"])){
					$err_email="*Email address required";
					$hasError=true;
				}
				else if(!strpos($_POST["email"],"@")){
					$err_email="*Characters must contain @";
                    $hasError=true;

				}
				
				else{
					$email=htmlspecialchars($_POST["email"]);
				}
				
             if(!$hasError){
			insertManager($_POST["name"],$_POST["uname"],$_POST["pass"],$_POST["email"]);

	}				
				
			
			}
			
	        
			
	//controller


function insertManager($name,$username,$password,$email)
{
	$query="insert into manager values(NULL,'$name','$username','$password','$email')";
	execute($query);
	header("Location: all-managers.php");
}

function updateManager($id,$name,$username,$password,$email)
{
	$query="update manager set name='$name',username='$username',password='$password',email=   '$email' where id='$id'";
	execute($query);
	header("Location: all-managers.php");
}

function deleteManager($id)
{
	$query="delete from manager where id='$id'";
	execute($query);
	header("Location: all-managers.php");
}


function getManager($id)
{
	$query="select * from manager where id='$id'";
	$result=get($query);
	if(count($result)>0)
	{
	return result[0];

	}
	else{ 
	return false;
	}
}

function getAllManagers()
{
	$query="select * from manager";
	$result=get($query);
	return $result;
}

function checkUsernameValidity($username){
			$query="select * from manager where username='$username'";
			$result=get($query);
			if(count($result)>0){
				return "false";
			}
			return "true";
		}



?>