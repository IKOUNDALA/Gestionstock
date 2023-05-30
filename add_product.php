<?php
	// Initialiser la session
	session_start();
	// Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
	if(!isset($_SESSION["username"])){
		header("Location: index.php");
		exit(); 
	}
?>

		<div class="sucess" align="center">
		<h1 style="background-color:green;">Bienvenue Administrateur!</h1>
		</div>

<?php
include 'header.php';

?>



	<div class="panel panel-danger  col-md-5 " style="position: relative; left:350px; ">
		<div class="panel panel-heading">
			<h1>Enregistrer les Produits</h1>
		</div>
		<div class="panel panel-body">
			<form action="ajout.php" class="form" method="POST">
				<div class="form-group">
					<label for="libelle" class="label-control">Libelle</label>
					<input type="text" class="form-control" name="libelle">
				</div>
				<div class="form-group">
					<label for="quantite" class="label-control">Quantite</label>
					<input type="number" class="form-control" name="quantite">
				</div>
				<div class="form-group">
					<label for="prix" class="label-control">Prix</label>
					<input type="number" class="form-control" name="prix">
				</div>
				
				<div class="form-group" align="center">
					<button class="btn btn-success" type="submit" name="val">Valider</button>
					<button class="btn btn-danger" type="reset" name="reset">Annuler</button>
				</div>
			</form>
		</div>
	</div>

	<div class="sucess" align="center">
	<a href="logout.php" class="btn btn-warning glyphicon glyphicon-log-out" type="button">Déconnexion</a>
	<a href="affiche.php" class='btn btn-info glyphicon glyphicon-list type="button"'>Produits</a>
	</div>




