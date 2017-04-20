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
			
			
			<form method='post' id=center action='upload.photo.php' enctype='multipart/form-data'>
				
				 <?php echo $_SESSION['Prenom'].$_SESSION['Nom']."<img src='" . $_SESSION['photo_profil'] . "' style='width:75px; height:75px; float:right'>"; ?>
				</br></br>
				Poster une photo
				<input type="text" placeholder="Text photo" name="Text" >
				 Acces:<SELECT name="Accessibilité" size="1"><OPTION>1<OPTION>2<OPTION>3</SELECT>
				<input type='file' name='avatar'>
				<input type='hidden' name='MAX_FILE_SIZE' value='250000'>
				<input type='submit' value='Envoyer'>
				</br>
			</form>
			
			<p id=center>
				
				<img src="photo de profil.jpg"  width="50" height="50"/> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
				<a id=text>Nom de l'utilisateur <a/> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<img src="photo.jpg"  name="photo" id="photo"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<img src="video.png"  name="video" id="photo"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
				
				Ajouter une photo ou une vidéo
			</p>
			
			<p id=center>
				
				
				
				Album 1
			</p>
			
			<p id=center> 
				
				
				
				Album 2
			</p>
			
			<p id=center>
				<img src="photo de profil.jpg"  width="50" height="50" id="milieu"/> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			</p>
			
			<p id=center>
				<img src="photo de profil.jpg"  width="50" height="50" id="milieu"/> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			</p>
			
		</div>
		
	</body>
	
	
<footer>
Droit d'auteur &#9400 2017 Econnect  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Dernière mise à jour le 16/04/2017   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Briac Boulet &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Naïm Khames &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Pierre Lala
</footer>

</html>