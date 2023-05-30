<?php 
	include 'header.php';
	if(isset($_GET['id'])){
	$idprod=$_GET['id'];
    $sql = "DELETE FROM products WHERE id_gest = '$idprod'";
    $resultat = mysqli_query($conn,$sql);

    	if($resultat){
    		header("location:affiche.php");
    		exit;
    	}else{
    		echo " La suppression n'as pas marché";
    	}	
    	}
    
 ?>