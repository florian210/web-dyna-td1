
<?php
function createHtmlTable($nbLignes,$nbColonnes)

{?>

<table border='1'>

	<tbody>
	


		<?php
		for ($i=0;$i<$nbLignes;$i++)
		{?>
        <tr>

        <?php for($j=0;$j<$nbColonnes;$j++){
            
		?>

            <td> <?="$i - $j"?></td>
        <?php }?>
        </tr>

      <?php }?>
<?php } ?>
    </tbody>
</table>