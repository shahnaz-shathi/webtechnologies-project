<?php
require_once "controllers/product-controller.php";
?>
<html>
	<head>

	</head> 
	<body>
		<?php
		    $id="";
			$err_id="";
			$hasError=false;

			
			
			if(isset($_POST["delete-product"])){

				
				if(empty($_POST["id"])){
					$err_id="*Id Required";
					$hasError=true;
				}
				else if(!is_numeric($_POST["id"])){
					$err_id="*Only numeric value is accepted";
					$hasError=true;
				}
				else{
					$id=htmlspecialchars($_POST["id"]);
				}
			
				
					
				if(!$hasError){
			deleteProduct($_POST["id"]);
            }
			
			} 
			
		?> 
	
		<fieldset>
			
			<center><legend><h1>Delete Product</h1></legend></center>
			<center>
			<form action="" method="post" onsubmit="return validate()">
				<table>
					
					
					<tr>
						<td><span> Id</span></td> 
						<td>: <input type="text" id="id" value="<?php echo $id;?>" name="id">
						<span id="err_id"><?php echo $err_id;?></span></td>
						
					</tr>
					
					
					<tr>
						<td align="center" colspan="2"><input type="submit" name="delete-product" value="Delete Product"></td>
					</tr>
					
				</table>
				 
				
			</form>
			</center>
		</fieldset>	
	</body>
</html>



<script>	
function get(id){
	return document.getElementById(id);
}
function validate(){
	cleanUp();
	var hasError=false;
	if(get("id").value==""){
		get("err_id").innerHTML="*Id Required";
				get("err_id").style="color:blue";
				hasError=true;
	}
	
	
	if(!hasError){
		return true;
	}
	return false;
}
function cleanUp(){
			get("err_id").innerHTML="";

}
</script>