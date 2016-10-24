<?php
include("connexion.php");

$req='Delete from don where email="'.$_GET['email'].'";';
if(mysql_query($req))
{

header('Location:supprimer_don1.php');
}
else 
	echo 'not Done';
?>
