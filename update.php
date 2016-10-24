<html>
	<head>
		<meta charset="utf-8">
		<title>Update </title>
	</head>
	<body>
		<?php
		$Question=$_GET['Question'];
		$Nom=$_GET['Nom'];
		$Courriel=$_GET['Courriel'];
		$Numero=$_GET['Numero'];
        $Code=$_GET['Code'];
		?>
		<form action="updatesubmit.php" method="post" >
			<table >
				<tr>
					<td>Question</td>
					<td><input name="Question" type="text" value="<?php  echo $Question; ?>"  /></td>
				</tr>
				<tr>
					<td >Nom</td>
					<td><input name="Nom" type="text" value="<?php  echo $Nom; ?>"  /></td>
				</tr>
				<tr>
					<td>Courriel</td>
					<td><input name="Courriel" type="text" value="<?php echo $Courriel; ?>"/></td>
				</tr><br />
				<tr>
					<td>Numero</td>
					<td><input name="Numero" type="texte" value="<?php echo $Numero;?>" /></td>
				</tr></br>
				<tr>
					<td>Code</td>
					<td><input name="Code" type="text" value="<?php echo $Code ;?>"/></td>
				</tr><br />
				<tr>
			</table>
			<input type="submit" value="Submit "  />
		</form>
	</body>
</html>