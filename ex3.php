<form method="POST">
	<label for="size">Size: </label>
	<input type="number" value ="<?php echo $_POST["size"]; ?>" name="size">
	<label for="color">color : </label>
	<input type="string" value="" name="color">
	
	<textarea name="message" rows="8" cols="45" > votre message </textarea>
	<input type="submit" value="valider">
</form>

<p style="font-size:<?php echo $_POST["size"];?>px; color:<?php echo $_POST["color"];?>"> ce texte:"<?php echo $_POST["message"];?>"est écrit en <?php echo $_POST["size"];?>