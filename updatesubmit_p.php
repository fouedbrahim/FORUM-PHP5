<?php
	include("connexion.php");

	
	$nom=$_GET['nom'];
				$prenom=$_GET['prenom'];
					$email=$_GET['email'];
						$adresse=$_GET['adresse'];
						
								$sexe=$_GET['sexe'];
									$pays=$_GET['pays'];
										$profession=$_GET['profession'];
											$commentaire=$_GET['commentaire'];
		
	
	$$requete="UPDATE `petition` SET  `nom`='$nom',`prenom`='$prenom',`email`='$email',`adresse`='$adresse',`sexe`='$sexe' ,`pays`='$pays',`profession`='$profession',`commentaire`='$commentaire' WHERE nom='$nom';";
	
	if (mysql_query($requete)){
		header("location:Affiche_p.php");
	}else{
		echo "Erreur lors de la modification";
	}
?>

