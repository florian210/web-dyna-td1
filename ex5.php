<body>
<?php


include "fonction.php";

?>

<form method="POST">
	<label for="li">Lignes: </label>
	<input type="number" value =""name="li">
	<label for="co">Colonnes : </label>
	<input type="number" value="" name="co">
	
	
	<input type="submit" value="Créer le tableau">
	</form>
<br>

		<?php
		$nbLignes=$_POST["li"]??10;
		$nbColonnes=$_POST["co"]??10;
		createHtmlTable($nbLignes,$nbColonnes);
		?>

<a href="?li=2&co=2">Tableau 2 x 2</a><br>

<a href="?li=5&co=5">Tableau 5 x 5</a><br>

<a href="?li=10&co=8">Tableau 10 x 8</a><br>

<hr>

<?php


$nbLignes=$_GET["li"]??10;
$nbColonnes=$_GET["co"]??10;


createHtmlTable($nbLignes,$nbColonnes);

 ?>
 
 </body>