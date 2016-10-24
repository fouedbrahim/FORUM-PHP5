<?php
include("connexion.php");

$req='select * from utilisateur where email="'.$_POST['email'].'" and pass="'.$_POST['passadmin'].'";';
mysql_query($req);
$resultat = mysql_query($req);
$nb =mysql_num_rows($resultat);
if ($nb!=0)
header("location:consulter.php");
else 

header("location:index.php?err=1");
?>