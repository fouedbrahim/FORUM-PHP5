<?php
			mysql_connect("127.0.0.1","root","") or die ("connexion impossible".mysql_error());
			mysql_select_db("for");

//Nom dutilisateur de ladministrateur
$admin='admin';

/******************************************************
----------------Configuration Optionelle---------------
******************************************************/

//Nom du fichier de laccueil
$url_home = 'index.html';

//Nom du design
$design = 'default';


/******************************************************
----------------------Initialisation-------------------
******************************************************/

		?>