<?php
include("connexion.php");

$req='Delete from forum_reponses where id="'.$_GET['id'].'";';
if(mysql_query($req))
{

header('Location:admin_forum_index.php');
}
else 
	echo 'not Done';
?>
