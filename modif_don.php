<?php
include("connexion.php");

				
$req='update don set nom="'.$_POST['nom'].'", prenom="'.$_POST['prenom'].'",email="'.$_POST['email'].'" ,type="'.$_POST['type'].'",montant_direct="'.$_POST['mont'].'",mode_paiment_direct="'.$_POST['modp'].'" where email="'.$_POST['email'].'";';
if(mysql_query($req))
	header('Location:modifier_don1.php');
	
else
	echo 'error'.mysql_error();
?>

