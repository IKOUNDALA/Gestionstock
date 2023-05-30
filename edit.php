<?php

include'header.php';
$idprod = $_GET['id'];

$req = "SELECT * FROM products WHERE id_gest='$idprod'"; // creer une requeter

$result = mysqli_query($conn,$req);		// executer une requeter




if($result){
		if($row = mysqli_fetch_assoc($result)){
	
 
 ?>
 
<div class="panel panel-primary  col-md-5 " style="position: relative; top: 80px; left: 300px;">

		<div class="panel panel-heading">
			<h1>Modifier le Produit</h1>
		</div>
		<div class="panel panel-body">
			<form action="edit.php?idp=<?php echo $row['id_gest']?>" class="form" method="POST">
				<div class="form-group">
					<label for="libelle" class="label-control">Libelle</label>
					<input type="text" class="form-control" name="libelle" value="<?php echo $row['libelle']?>">
				</div>
				<div class="form-group">
					<label for="quantite" class="label-control" >quantite</label>
					<input type="number" class="form-control" name="quantite" value="<?php echo $row['quantite']?>">
				</div>
				<div class="form-group">
					<label for="prix" class="label-control" >Prix</label>
					<input type="number" class="form-control" name="prix" value="<?php echo $row['prix']?>">
				</div>
				
				<div class="form-group" align="center">
					<button class="btn btn-success" type="submit" name="val">Valider</button>
					<button class="btn btn-danger" type="reset" name="res" disabled="disabled">Annuler</button>
				</div>
			</form>
		</div>
	</div>
</div>

	<?php
	}
	}

	if(isset($_POST['val'])){


		$idp = $_GET['idp'];
		$libelle= $_POST['libelle'];
		$quantite = $_POST['quantite'];
		$prix = $_POST['prix'];

	
	$sql = "UPDATE products SET libelle='$libelle', quantite='$quantite', prix='$prix' WHERE id_gest='$idp'";
	$resulta = mysqli_query($conn,$sql);
	if($resulta){
		header("location:affiche.php");
	
	} 
	}  
	?>