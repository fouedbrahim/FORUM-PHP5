<?php
include("connexion.php");

				
$req='update forum_reponses set message="'.$_POST['message'].'";';
if(mysql_query($req))
	header('Location:admin_forum_index.php');
	
else
	echo 'error'.mysql_error();
?>

