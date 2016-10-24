<?php
include("connexion.php");
    $Question=$_POST['Question'];
	$Nom=$_POST['Nom'];
	$Courriel=$_POST['Courriel'];
	$Numero=$_POST['Numero'];
	$Code=$_POST['Code'];
	
$req="UPDATE `info` SET `Question`='$Question',`Nom`='$Nom',`Courriel`='$Courriel',`Numero`='$Numero',`Code`='$Code' WHERE Nom='$Nom';";
if(mysql_query($req))
	header('Location:update.php');
else
	echo 'error'.mysql_error();
?>