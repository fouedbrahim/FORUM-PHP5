<!-- Realisé par ben brahim foued -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>gestion de forum</title>

<meta http-equiv="cache-control" content="no-cache">
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<meta charset="UTF-8">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<meta name="viewport" content="width=device-width">
<!-- Css Files Start -->
<link href="css/style.css" rel="stylesheet" type="text/css" /><!-- All css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" /><!-- Bootstrap Css -->

<link href="css/font-awesome.css" rel="stylesheet" type="text/css" /><!-- Font Awesome Css -->
<!-- Css Files End -->
<!-- Social Icons no JS -->
<noscript>
		<link rel="stylesheet" type="text/css" href="css/nj.css" />
</noscript>
<script language="javascript" src="script.js">
</script>
<!-- Social Icons no JS -->

</head>
<body>
<!-- Start Main Wrapper -->
<div class="wrapper">
<!-- Start of Header -->
	<header>
  <!-- Start Main Header -->
  <section class="top_bar">
	<section class="container-fluid container">
		<section class="row-fluid">
			<article class="span6">
				<ul class="details">
					<li><i class="icon-map-marker"> </i> Tunis</li>
					<li><i class="icon-mobile-phone"> </i> +216 98 765 432 </li>
					<li><a href="mailto:hope.care@esprit.tn"><i class="icon-envelope-alt"></i></a>hope.care@esprit.tn</li>
				</ul>
			</article>
			<article class="span4 offset2"> 		
				<ul class="social">
					<li> <a href="#" class="s8"> Pintrest</a> </li>
					<li> <a href="#" class="s7"> Youtube</a> </li>
					<li> <a href="#" class="s6"> Vimeo </a> </li>
					<li> <a href="#" class="s5"> Twitter</a> </li>
					<li> <a href="#" class="s4"> RSS </a> </li>
					<li> <a href="#" class="s3"> Flicker</a> </li>
					<li> <a href="#" class="s2"> Dribble</a> </li>
					<li> <a href="#" class="s1"> Facebook</a> </li>
				</ul>
			</article>
		</section>
	</section>	
  </section>

  <section class="logo_container" >
		  <section class="container-fluid container">
				<section class="row-fluid">
					 
					  <section class="span4">
							<h1 id="logo">
								<a href="index.html">
									<img src="images/logo.png">
								</a>
					
							</h1>
						
							</section>
						
						
						
				</section>
				
			</section>
  </section>
	 <nav id="nav">
				<section class="container-fluid container">
					<section class="row-fluid">
			  <div class="navbar navbar-inverse">
				<div class="navbar-inner">
				  <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				  <div class="nav-collapse collapse">
					<ul class="nav">
	
					
 
   					 <li class="dropdown Active"> <a class="dropdown-toggle" > Gestion des Administrateurs <b class="caret"></b> </a>
						<ul class="dropdown-menu">
						<li><a href="ajouteradmin.html">Ajouter un Administrateur</a></li>
						<li><a href="consulter.php">Gérer Les administrateurs</a></li>
					
 						</ul>
					  </li>
 
 
   					 <li class="dropdown"> <a class="dropdown-toggle"  > GESTION DES evenement <b class="caret"></b> </a>
						<ul class="dropdown-menu">
						<li><a href="ajouter_evenement.php">ajouter des evenement</a></li>
						<li><a href="liste_evenements.php">afficher la liste des evenement</a></li>
                        
 						</ul>
					  </li>
 
  <li class="dropdown "> <a class="dropdown-toggle" href="#.html" > GESTION DES DONS <b class="caret"></b> </a>
						<ul class="dropdown-menu">
												<li><a href="affiche_don1.php">afficher la liste des dons</a></li>
						<li><a href="modifier_don1.php">modifier la liste des dons</a></li>
                        <li><a href="supprimer_don1.php">supprimer du liste des dons</a></li>
					
 						</ul>
					  </li>
 
					<li class="dropdown Active"> <a class="dropdown-toggle" href="#.html" > GESTION DES INFORMATIONS <b class="caret"></b> </a> <ul class="dropdown-menu"> <li><a href="affiche_info.php">afficher les infos</a></li> <li><a href="index.html">ajouter des infos</a></li> </ul> </li>	
						
						
						

					</ul>
				  </div>
				  <!--/.nav-collapse -->
				</div>
				<!-- /.navbar-inner -->
			  </div>
			
			  <!-- /.navbar -->
					</section>
				</section>
			</nav>
	 
	 </header>
<!-- End of Header -->

<!-- Title & BreadCrumbs -->
<section class="mtop" id="titre">
	<section class="container-fluid container">
		<section class="row-fluid">
			<section id="donation_box">
				<section class="container container-fluid">
					<section class="row-fluid">
					<div class="span8 first" > <h2>Gestion de Forum  </h2> </div>
		<div class="span4 title_right">
				<div class="dropdown" id="cart_dropdown">
 				
				
						
					</div>
			</div>
	</section>
				</section>
			</section>		<!-- end of Page Title -->
	</section>
 		<section class="row-fluid">
			<!-- BreadCrumbs -->
				<figure id="breadcrumbs" class="span12">
					
				</figure>
			<!-- End of breadcrumbs -->
		</section>
	</section>
</section>
<!-- End of Tile & Breadcrumbs -->

<!-- Page Content Container -->
<section id="content" class="mbtm blog">
	<section class="container-fluid container">
		<section class="row-fluid">
				
				<section class="span9" id="blog_listing">
				  <figure class="blog_item">
				    <div class="inner_lyr">
                    <form action="modifier_reponse_admin.php" method="post">
				      <table width="80%" border="1">
				        <tr>
				          <td> id_reponse</td>
				          <td>auteur</td>
				          <td><strong>REPONSE</strong></td>
				          <td>date modification</td>
				          
				            <td>supprimer reponse</td>
			            </tr>
				        <?php
			include('connexion.php');
			$req="SELECT * FROM `forum_reponses`;";
			$resultat=mysql_query($req);
			
			while($ligne=(mysql_fetch_row($resultat)))
			{
			?>
				        <tr>
				          <td><?php echo $ligne[0] ?></td>
				          <td><?php echo $ligne[1] ?></td>
				          <td><?php echo $ligne[2] ?></td>
				          <td><?php echo $ligne[3] ?></td>
				         
				          <td><a href="supprimer_reponse_forum.php?id=<?php echo $ligne[0]?>" >supprimer</a> / <a href="admin_forum_index.php?id=<?php echo $ligne[0]?>&message=<?php echo $ligne[2]?>" >modifier</a></td>
			            </tr>
				        <?php
			}
			?>
			          </table>
                      
                      <fieldset><legend>gestion des reponses</legend> <input type="text" value="<?php echo $_GET['message']?>"/><input type="submit" /></fieldset>
                      </form>
                    <legend>gestion des Sujets</legend><table width="80%" border="1">
  <tr>
    <td>id_sujet</td>
    <td>auteur_sujet</td>
    <td>titre sujet</td>
    <td>date</td>
    <td>gestion des sujets</td>
  </tr>
   <?php
			include('connexion.php');
			$req="SELECT * FROM `forum_sujets`;";
			$resultat=mysql_query($req);
			
			while($ligne=(mysql_fetch_row($resultat)))
			{
			?>
				        <tr>
				          <td><?php echo $ligne[0] ?></td>
				          <td><?php echo $ligne[1] ?></td>
				          <td><?php echo $ligne[2] ?></td>
				          <td><?php echo $ligne[3] ?></td>
				         
				          <td><a href="supprimer_reponse_forum.php?id=<?php echo $ligne[0]?>" >supprimer</a> / <a href="admin_forum_index.php?id=<?php echo $ligne[0]?>&message=<?php echo $ligne[2]?>" >modifier</a></td>
			            </tr>
				        <?php
			}
			?>
</table>
                        
                        <?php
// on teste si le formulaire a été soumis
if (isset ($_POST['go']) && $_POST['go']=='Poster') {
	// on teste la déclaration de nos variables
	if (!isset($_POST['auteur']) || !isset($_POST['titre']) || !isset($_POST['message'])) {
	$erreur = 'Les variables nécessaires au script ne sont pas définies.';
	}
	else {
	// on teste si les variables ne sont pas vides
	if (empty($_POST['auteur']) || empty($_POST['titre']) || empty($_POST['message'])) {
		$erreur = 'Au moins un des champs est vide.';
	}

	// si tout est bon, on peut commencer l'insertion dans la base
	else {
		// on se connecte a notre base
		$base = mysql_connect ("127.0.0.1","root",""); 
mysql_select_db ('for', $base) ;

		// on calcule la date actuelle
		$date = date("Y-m-d H:i:s");

		// préparation de la requete d'insertion (pour la table forum_sujets)
		$sql = 'INSERT INTO forum_sujets VALUES("", "'.mysql_escape_string($_POST['auteur']).'", "'.mysql_escape_string($_POST['titre']).'", "'.$date.'")';

		// on lance la requete (mysql_query) et on impose un message d'erreur si la requete ne se passe pas bien (or die)
		mysql_query($sql) or die('Erreur SQL !'.$sql.'<br />'.mysql_error());

		// on recupere l'id qui vient de s'insérer dans la table forum_sujets
		$id_sujet = mysql_insert_id();

		// lancement de la requete d'insertion (pour la table forum_reponses
		$sql = 'INSERT INTO forum_reponses VALUES("", "'.mysql_escape_string($_POST['auteur']).'", "'.mysql_escape_string($_POST['message']).'", "'.$date.'", "'.$id_sujet.'")';

		// on lance la requete (mysql_query) et on impose un message d'erreur si la requete ne se passe pas bien (or die)
		mysql_query($sql) or die('Erreur SQL !'.$sql.'<br />'.mysql_error());

		// on ferme la connexion a la base de données
		mysql_close();

		// on redirige vers la page d'accueil
		header('Location: admin_forum_index.php');

		// on termine le script courant
		exit;
	}
	}
}
?>


<!-- on fait pointer le formulaire vers la page traitant les données -->
AJOUTER SUJET :
<form action="admin_forum_index.php" method="post">
<table>
<tr><td>
  <strong>Auteur </strong></td><td>
<input type="text" name="auteur" maxlength="30" size="50" value="administration" readonly="readonly" >
</td></tr><tr><td>
  <strong>Titre</strong></td><td>
<input type="text" name="titre" maxlength="50" size="50" value="<?php if (isset($_POST['titre'])) echo htmlentities(trim($_POST['titre'])); ?>">
</td></tr><tr><td>
  <strong>remarques</strong></td><td><textarea name="message" cols="50" rows="10"><?php if (isset($_POST['message'])) echo htmlentities(trim($_POST['message'])); ?>
</textarea></td></tr><tr><td><td align="right">&nbsp;</td></tr></table>

<input type="submit" name="go" value="Poster" />
</form>



<p>
  <?php
// on affiche les erreurs éventuelles
if (isset($erreur)) echo '<br /><br />',$erreur;
?>
  <br /><br />
  
  
  <div class="box_login">
  
</p>
<div class="center">
  
  
      </div>
  
                     
				    </div>
				   
				  </figure>
				</section>
				
				
		</section>
	</section>

</section>
<!-- Page Content Container -->
	 

</div>
<!-- End Main Wrapper -->
<!-- JS Files Start -->
<script type="text/javascript" src="js/lib-1-9-1.js"></script><!-- lib Js -->
<script type="text/javascript" src="js/lib-1-7-1.js"></script><!-- lib Js -->
<script type="text/javascript" src="js/modernizr.js"></script><!-- Modernizr -->
<script type="text/javascript" src="js/easing.js"></script><!-- Easing js -->
<script type="text/javascript" src="js/bootstrap.js"></script><!-- Bootstrap -->
<script type="text/javascript" src="js/bxslider.js"></script><!-- BX Slider -->
<script type="text/javascript" src="js/clearInput.js"></script><!-- Input Clear -->
<script type="text/javascript" src="js/smooth-scroll.js"></script><!-- smooth Scroll -->
<script type="text/javascript" src="js/prettyPhoto.js"></script><!-- Pretty Photo -->
<script type="text/javascript" src="js/social.js"></script><!-- Social Media Hover Effect -->
<script type="text/javascript" src="js/countdown.js"></script><!-- Event Counter -->
<script type="text/javascript" src="js/custom.js"></script><!-- Custom / Functions -->
<!--[if IE 8]>
     <script src="js/ie8_fix_maxwidth.js" type="text/javascript"></script>
<![endif]--> 
</body>
</html>