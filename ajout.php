	<?php
			include("connexion.php");
			$Question=$_POST['Question'];
			$Nom=$_POST['Nom'];
            $Courriel=$_POST['Courriel'];
            $Numero=$_POST['Numero'];
            $Code=$_POST['Code'];
            

			$req="INSERT INTO `info`(`Question`, ` Nom`, `Courriel`, `Numero`, `Code`)  VALUES ('$Question','$Nom','$Courriel','$Numero','$Code');";
           
			if(mysql_query($req))
			{
				echo "<h1>Insertion avec succés</h1> <br> <a href=affiche_info.php>Afficher les informations </a>";

			}
			else
				echo 'Insertion Impossible'.mysql_error();
		?>