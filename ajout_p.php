	<?php
			include("connexion.php");
			$nom=$_POST['nom'];
				$prenom=$_POST['prenom'];
					$email=$_POST['email'];
						$adresse=$_POST['adresse'];
						
								$sexe=$_POST['sexe'];
									$pays=$_POST['pays'];
										$profession=$_POST['profession'];
											$commentaire=$_POST['commentaire'];
		


			$req="INSERT INTO `petition`(`nom`, `prenom`, `email`, `adresse`, `sexe`, `pays`, `profession`, `commentaire`) VALUES ('$nom','$prenom','$email','$adresse','$sexe','$pays','$profession','$commentaire');";
	
			if(mysql_query($req))
			{
			?>
			

<!-- Realisé par ben brahim foued -->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>SIGNER PETITION </title>
<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
<![endif]-->
<!--[if lt IE 9]>
	<script src="js/mq.js"></script>
<![endif]-->
<meta http-equiv="cache-control" content="no-cache">
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<meta charset="UTF-8">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<meta name="viewport" content="width=device-width">
<!-- Css Files Start -->
<link href="css/style.css" rel="stylesheet" type="text/css" /><!-- All css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" /><!-- Bootstrap Css -->
<!--[if lte IE 9]><link rel="stylesheet" type="text/css" href="css/customIE.css" /><![endif]-->
<link href="css/font-awesome.css" rel="stylesheet" type="text/css" /><!-- Font Awesome Css -->
<link href="css/font-awesome-ie7.css" rel="stylesheet" type="text/css" /><!-- Font Awesome iE7 Css -->
<!-- Css Files End -->
<!-- Social Icons no JS -->
<noscript>
		<link rel="stylesheet" type="text/css" href="css/nj.css" />
</noscript>
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

  <section class="logo_container">
		  <section class="container-fluid container">
				<section class="row-fluid">
					  <table border="0"><tr><td width="800">
					  <section class="span4">
							<h1 id="logo">
								<a href="index.html">
									<img src="images/logo.png">
								</a>
					
							</h1>
						
							</section>
						</td><td><section>pseudo
						<input type="text" id="auth"><br>mot de passe &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" id="auth"><br>
						<input type="button" value="connexion" id="button">
						</section></td></tr></table>
						
						
				</section>
				
			</section>
  </section>
	<!-- Main Nav Bar -->
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
 
					<li class="dropdown Active"> <a class="dropdown-toggle" href="#.html" > GESTION DES INFORMATIONS <b class="caret"></b> </a> <ul class="dropdown-menu"> <li><a href="affiche_info.php">afficher les infos</a></li> <li><a href="ajout_info.html">ajouter des infos</a></li> </ul> </li>	
						
 
 <li class="dropdown "> <a class="dropdown-toggle" href="#.html" > GESTION DES PETITIONS<b class="caret"></b> </a>
						<ul class="dropdown-menu">
												<li><a href="petition.html">ajouter petitions</a></li>
						
					
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
	<!-- End Main Nav Bar -->	 
	 </header>
<!-- End of Header -->

<!-- Title & BreadCrumbs -->
<section class="mtop">
	<section class="container-fluid container">
		<section class="row-fluid">
			<section id="donation_box">
				<section class="container container-fluid">
					<section class="row-fluid">
					<div class="span8 first"> 
                    <body>
	
	<table border="1">
 
			<tr>
				<td><strong>nom</strong></td>
				<td><strong>prenom</strong></td>
				<td><strong>email</strong></td>
				<td><strong>adresse</strong></td>
			<td><strong>sexe</strong></td>
			<td><strong>pays</strong></td>
			<td><strong>profession</strong></td>
			<td><strong>commentaire</strong></td>
				<td><strong>delete</strong></td>
				<td><strong>update </strong></td>
			</tr>
			
				<?php
include("connexion.php");
$nom=$_GET['nom'];
$req="DELETE from petition where nom='$nom';";

if(mysql_query($req))
{
//echo'Done';
header('Location:Affiche_p.php');
}
else 
	echo 'not Done';
?>
			
	
	
	
</body>
</html>


	
			
			
			<?php
				
			}
			else
				echo 'Insertion Impossible'.mysql_error();
		?>