<html>
<head>
<title>Index de notre forum</title>
</head>
<body>

<!-- on place un lien permettant d'accéder a la page contenant le formulaire d'insertion d'un nouveau sujet -->
<a href="./insert_sujet.php">Insérer un sujet</a>

<br /><br />

<?php
// on se connecte a notre base de données
$base = mysql_connect ("127.0.0.1","root",""); 
mysql_select_db ('for', $base) ;

// préparation de la requete
$sql = 'SELECT id, auteur, titre, date_derniere_reponse FROM forum_sujets ORDER BY date_derniere_reponse DESC';

// on lance la requete (mysql_query) et on impose un message d'erreur si la requete ne se passe pas bien (or die)
$req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());

// on compte le nombre de sujets du forum
$nb_sujets = mysql_num_rows ($req);

if ($nb_sujets == 0) {
	echo 'Aucun sujet';
}
else {
	?>
	<table width="500" border="1"><tr>
	<td>
	Auteur
	</td><td>
	Titre du sujet
	</td><td>
	Date derniere réponse
	</td></tr>
	<?php
	// on va scanner tous les tuples un par un
	while ($data = mysql_fetch_array($req)) {

	// on décompose la date
	sscanf($data['date_derniere_reponse'], "%4s-%2s-%2s %2s:%2s:%2s", $annee, $mois, $jour, $heure, $minute, $seconde);

	// on affiche les résultats
	echo '<tr>';
	echo '<td>';

	// on affiche le nom de l'auteur de sujet
	echo htmlentities(trim($data['auteur']));
	echo '</td><td>';

	// on affiche le titre du sujet, et sur ce sujet, on insere le lien qui nous permettra de lire les différentes réponses de ce sujet
	echo '<a href="./lire_sujet.php?id_sujet_a_lire=' , $data['id'] , '">' , htmlentities(trim($data['titre'])) , '</a>';

	echo '</td><td>';

	// on affiche la date de la derniere réponse de ce sujet
	echo $jour , '-' , $mois , '-' , $annee , ' ' , $heure , ':' , $minute;
	}
	?>
	</td></tr></table>
	<?php
}

// on libere l'espace mémoire alloué pour cette requete
mysql_free_result ($req);
// on ferme la connexion a la base de données.
mysql_close ();
?>
</body>
</html>