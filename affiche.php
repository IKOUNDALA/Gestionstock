 <?php
include'header.php';

$sql="SELECT * FROM products";

$resu=mysqli_query($conn,$sql);

 ?>

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
		<h1 style="background-color:green;">Espace Administrateur!</h1>
		<a href="logout.php" class="btn btn-warning " type="button">Déconnexion</a>
		</div>
		<a href="ajout.php" class='btn btn-info glyphicon glyphicon-plus type="button"'>Nouveau</a>

  <div class="col-md-12 panel panel-info">
 	<div class="panel panel-heading">
 		<h1 align="center">Affichage</h1>
 	</div>
 	<div class="panel panel-boby">
 		<table class="table table-bordered table-striped">
 			<thead>
 				<th>Libelle</th>
 				<th>Quantite</th>
 				<th>Prix</th>
 				<th>Modifier</th>
 				<th>Supprimer</th>

 		
 			</thead>
 			<tbody>
 				<?php 
 				if ($resu) {
 					while ($row=mysqli_fetch_assoc($resu)) {

 				 ?>
 				<tr>
 					<td><?php echo $row['libelle'];  ?></td>
 					<td><?php echo $row['quantite']; ?></td>
 					<td><?php echo $row['prix'];  ?></td>
 					
 					<td><a href="edit.php?id=<?php echo $row['id_gest']; ?>">
 						<button class="btn btn-info  glyphicon glyphicon-pencil"></button>
 					</a></td>

 					<td><a href="delete.php?id=<?php echo $row['id_gest']; ?>">
 						<button class="btn btn-danger  glyphicon glyphicon-trash"></button>
 					</a></td>
 				</tr>
 				</tr>
 				<?php
 			    }  
 			} 
 
 				 ?>
 				
 			</tbody>
 			
 	
 		
 	</div>
 	

 </div>

<?php 
include'footer.php';


 ?>


