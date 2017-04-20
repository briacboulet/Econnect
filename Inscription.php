<!DOCTYPE html>
<html>

<head>
<title> Inscription </title>
<meta charset="utf-8"/>
<link href="CSS.css" rel="stylesheet" type="text/css" />
<link rel="icon" type="image/png" href="Logohead.png" />
</head>


<body style= "background-color:#11B637;">

<div> <img src="Logo.jpg"  width="250" height="250" /> </div>
<div style="color: white; position: relative; margin-left: 590px; margin-top: -200px; font-size: 110px;">Econnect</div>


<form method="post" action="Traitement.php" enctype="multipart/form-data">

<div style = "position: absolute; color: white; margin-top: 110px; margin-left: 450px;">
<li>Nom</li>
<ul><input type="text" placeholder="Nom" name="Nom" ></ul>
<li>Prénom</li>
<ul><input type="text" placeholder="Prénom" name="Prenom" ></ul>
<li>Sexe</li>
<ul><SELECT name="Sexe" size="1"><OPTION>Homme<OPTION>Femme</SELECT></ul>
<li>Adresse mail</li>
<ul><input type="text" placeholder="Adresse mail" name="Mail"></ul>
</div>

<div style = "color: white; margin-top: 110px; position: absolute; margin-left: 950px;">
<li>Mot de Passe</li>
<ul><input type="password" placeholder="Mot de passe" name="Mdp" ></ul>
<li>Date de naissance</li>
<ul><input type="Date" placeholder="Date de naissance" name="Date_de_naissance"></ul>
<li>Ville</li>
<ul><input type="text" placeholder="Ville" name="Ville"></ul>
<li>Pays</li>
<ul><input type="text" placeholder="Pays" name="Pays"></ul>
<div style="text-align: center; margin-top: 58px; margin-left: -480px;"><input type="submit" value="Inscription"></div>
<br><br><br>
</div>
</form> 

<footer style = "color: white; padding-top: 30px; text-align:center; margin-top: 508px;">
Droit d'auteur &#9400 2017 Econnect  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Dernière mise à jour le 16/04/2017   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Briac Boulet &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Naïm Khames &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Pierre Lala
</footer>

 </body>

</html>
