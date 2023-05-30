<?php 
include'header.php';
function champ_vide($libelle,$quantite,$prix){
	if(empty($libelle)||empty($quantite)||empty($prix)){
		header("refresh:0.9; url=add_product.php");
		echo "<h1 style='background-color:red;' align='center'>Veillez remplire tous les champs</h1>";
		$var=true;
}
else{
	$var=false;
}
  return $var;
  }

if(isset($_POST['val'])){
	$libelle=$_POST['libelle'];
	$quantite=$_POST['quantite'];
	$prix=$_POST['prix'];

	if (!champ_vide($libelle,$quantite,$prix)) {
		$sql="INSERT INTO products(libelle,quantite,prix) VALUES('$libelle','$quantite','$prix') ";

		$resultat=mysqli_query($conn,$sql);
		if ($resultat) {

			echo "Insertion avec succes";
			header("location:affiche.php");
		}
		else{
			echo "Echec de l'Insertion";
		}
	}


}else{
			header("location:add_product.php");
}






 ?>








