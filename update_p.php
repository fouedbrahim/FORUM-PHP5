<html>
	<head>
		<meta charset="utf-8">
		<title>Update </title>
	</head>
	<body>
		<?php
		$nom=$_GET['nom'];
				$prenom=$_GET['prenom'];
					$email=$_GET['email'];
						$adresse=$_GET['adresse'];
						
								$sexe=$_GET['sexe'];
									$pays=$_GET['pays'];
										$profession=$_GET['profession'];
											$commentaire=$_GET['commentaire'];
		?>
		<form action="updatesubmit_p.php" method="post" >
			<table >
				
				<tr>
					<td >Nom</td>
					<td><input name="Nom" type="text" value="<?php  echo $Nom; ?>"  /></td>
				</tr>
				<tr>
					<td>prenom</td>
					<td><input name="prenom" type="text" value="<?php echo $prenom; ?>"/></td>
				</tr><br />
				<tr>
					<td>email</td>
					<td><input name="email" type="texte" value="<?php echo $email;?>" /></td>
				</tr></br>
				<tr>
					<td>adresse</td>
					<td><input name="adresse" type="text" value="<?php echo $adresse ;?>"/></td>
				</tr><br />
				<tr>
					<td>sexe</td>
					<td><input name="sexe" type="text" value="<?php  echo $sexe; ?>"  /></td>
				</tr>
				<tr>
					<td>pays</td>
					<td><input name="pays" type="text" value="<?php  echo $pays; ?>"  /></td>
				</tr>
				<tr>
					<td>profession</td>
					<td><input name="profession" type="text" value="<?php  echo $profession; ?>"  /></td>
				</tr>
				<tr>
					<td>commentaire</td>
					<td><input name="commentaire" type="text" value="<?php  echo $commentaire; ?>"  /></td>
				</tr>
				<tr>
			</table>
			<input type="submit" value="Submit "  />
		</form>
	</body>
</html>