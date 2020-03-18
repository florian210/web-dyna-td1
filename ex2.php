<form method="GET">
	<label for="size">Size: </label>
	<input type="number" value ="<?php echo $_GET["size"]; ?>" name="size">
	<label for="color">color : </label>
	<input type="string" value="" name="color">
	<label for="message"> message: </label>
	<input type="string" value="" name="message">
	<input type="submit" value="valider">
</form>
<p style="font-size:<?php echo $_GET["size"];?>px; color:<?php echo $_GET["color"];?>"> ce texte:"<?php echo $_GET["message"];?>"est écrit en <?php echo $_GET["size"];?> </p>