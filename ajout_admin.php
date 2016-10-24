<?php
include("connexion.php");
if(empty($_POST['image']))
$img="profil.jpg";

$req='insert into utilisateur value("'.$_POST['nom'].'","'.$_POST['prenom'].'","'.$_POST['sexe'].'","'.$_POST['daten'].'","'.$_POST['adrs'].'","'.$_POST['tel'].'","'.$_POST['email'].'","'.$_POST['passadmin'].'","'.$img.'","admin");';
mysql_query($req);
header("location:consulter.php");
?>
