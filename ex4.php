<?php
$title='Ex4 ';
?>
<a href="?li=2&co=2">Tableau 2 x 2</a><br>
<a href="?li=5&co=5">Tableau 5 x 5</a><br>
<a href="?li=10&co=8">Tableau 10 x 8</a><br>

<?php
$nbLignes=$_GET["li"]??10;
$nbColonnes=$_GET["co"]??10;
echo "<h2>Tableau de $nbLignes par $nbColonnes</h2>";
?>

<table border='1'>

	<tbody>
		<?php for($i=0;$i<$nbLignes;$i++){
        $gras=($i%2==0)?"bold":"normal";
		?>

        <tr>

        <?php for($j=0;$j<$nbColonnes;$j++){
            $couleur=($j%2==0)?"red":"black";
		?>

            <td style="font-weight: <?=$gras ?>;color:<?=$couleur ?>"><?="$i - $j"?></td>
        <?php }?>
        </tr>

      <?php }?>

    </tbody>
</table>



