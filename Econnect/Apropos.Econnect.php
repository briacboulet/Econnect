<!DOCTYPE html>
<html>
<?php
session_start();
?>
	
   	<head>
		<title> Econnect </title>
		<meta charset="utf-8"/>
		<link href="CSS.css" rel="stylesheet" type="text/css" />
		<link rel="icon" type="image/png" href="icon.png" />
	</head>
	
	
	<header>
			<img src="Logo.jpg" name="logo" id="logo"/> 
			
            <a id="rechercher">
			<form action = "Rechercher_amis.php" method ="post"  >
			 <input type="text" placeholder="Cherchez une personne ou un évènement..." name="Nom" id="rechercher" style='float:top; margin-top:1px; margin-left:1px; '>
			 <input type="submit" value="Rechercher" style='position:absolute; float:right; margin-top:9px; margin-left:520px;' >
			</form>
			</a>
	
			<?php 
				$bdd = new PDO('mysql:host=localhost;dbname=bdd_econnect;charset=utf8', 'root', '');
				echo $_SESSION['Prenom'],  $_SESSION['Nom'];
			?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	
			<?php
		
				echo "<img src='" . $_SESSION['photo_profil'] . "' id='pdp'>";
			
			?>
			
			<a href=Reglages.php><img  src="parametre.jpg" name="parametre" id="parametre"/></a>

		
	</header>
	
	
	<body>
		
		<div id=col1>
			<a href=Econnect.php style = "color: white;">Fil d'actualité</a><br><br><br>
			<a href=Ami.Econnect.php style = "color: white;">Amis</a><br><br><br>
			<a href=Chronologie.Econnect.php style = "color: white;">Chronologie</a><br><br><br>
			<a href=Apropos.Econnect.php style = "color: white;">A propos</a><br><br><br>
			<a href=Photos.Econnect.php style = "color: white;">Photos et Vidéos</a><br><br><br>
		</div>
		
		
		
		<div id=col2>
		
			
			
			<?php
				$bdd = new PDO('mysql:host=localhost;dbname=bdd_econnect;charset=utf8', 'root', '');
				echo "<p id=center> Prenom: &nbsp;&nbsp;" . $_SESSION['Prenom'] . " &nbsp;&nbsp;</p>";
				echo "<p id=center> Nom: &nbsp;&nbsp;" . $_SESSION['Nom'] . " &nbsp;&nbsp;</p>";
				echo "<p id=center> Mail: &nbsp;&nbsp;" . $_SESSION['Mail'] . " &nbsp;&nbsp;</p>";
				echo "<p id=center> Sexe: &nbsp;&nbsp;" . $_SESSION['Sexe'] . " &nbsp;&nbsp;</p>";
				echo "<p id=center> Date de naissance: &nbsp;&nbsp;" . $_SESSION['Date_de_naissance'] . " &nbsp;&nbsp;</p>";
			
			?>
			
					
			<form method='post' id=center action='upload.photo_profil.php' enctype='multipart/form-data'>
				
				Changer de photo de profil <?php echo "<img src='" . $_SESSION['photo_profil'] . "' style='width:75px; height:75px; float:right'>"; ?>
				</br></br>
				<input type='file' name='avatar'>
				<input type='hidden' name='MAX_FILE_SIZE' value='250000'>
				<input type='submit' value='Envoyer'>
				</br>
			</form>
			
		</div>
		
	</body>
	
	
<footer>
Droit d'auteur &#9400 2017 Econnect  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Dernière mise à jour le 16/04/2017   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Briac Boulet &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Naïm Khames &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Pierre Lala
</footer>

</html>