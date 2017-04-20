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
		
			<img src="Logo.jpg"  width="80" height="80" /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			
            <input type="search" placeholder="Cherchez une personne ou un évènement..." name="Nom" id="rechercher"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			
				<?php 
				$bdd = new PDO('mysql:host=localhost;dbname=bdd_econnect;charset=utf8', 'root', '');
				
				echo $_SESSION['Prenom'],  $_SESSION['Nom'];
				
			?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			
			<img src="photo de profil.jpg"  width="80" height="80"/> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			
			<img src="parametre.jpg"  width="80" height="80"/>

		
		</header>
	
	
	<body>
		
		<div id=col1>
			<a href=Econnect.html style = "color: white;">Fil d'actualité</a><br><br><br>
			<a href=Ami.Econnect.html style = "color: white;">Amis</a><br><br><br>
			<a href=Chronologie.Econnect.html style = "color: white;">Chronologie</a><br><br><br>
			<a href=Apropos.Econnect.html style = "color: white;">A propos</a><br><br><br>
			<a href=Photos.Econnect.html style = "color: white;">Photos et Vidéos</a><br><br><br>
		</div>
		
		
		<div id=ut2 style="background-color:#11B637;">
			
				<img src="photo de profil.jpg"  width="50" height="50"/> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<?php
				
				$bdd = new PDO('mysql:host=localhost;dbname=bdd_econnect;charset=utf8', 'root', '');
				//include 'Rechercher_amis.php';
				//$Nom = $_GET['$amis[Nom]'];
				echo $_SESSION['Prenom2'], $_SESSION['Nom2'];
				//echo $Nom; 
				
				?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
				    <nav style="text-align:center;">
					<br><br>
					<a href=Ami.deUt2.Econnect.html style = "color: white;">Amis</a><br><br><br>
					<a href=Chronologie.deUt2.Econnect.html style = "color: white;">Chronologie</a><br><br><br>
					<a href=Apropos.deUt2.Econnect.html style = "color: white;">A propos</a><br><br><br>
					<a href=Photos.deUt2.Econnect.html style = "color: white;">Photos et Vidéos</a><br><br><br>
				</nav>
				
		</div>
		
		
		
		<div id=col2 style = "margin-left: 100px;">
		
			<p id=center>
				
			Informations:
		
			</p>
		</div>
		
	</body>
	
	
<footer>
Droit d'auteur &#9400 2017 Econnect  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Dernière mise à jour le 16/04/2017   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Briac Boulet &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Naïm Khames &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Pierre Lala
</footer>

</html>