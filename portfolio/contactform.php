<!-- Nicky Devilee | 99047338
Bol4 applicatieontwikkelaar
Blok 2
Week 24/25 - Templating -->

<form method="post" action="contact.php">
	<fieldset>
		<legend>Contact opnemen:</legend>
			Voornaam:<br>
			<input type="text" name="voornaam" placeholder="Voornaam" required><br>
			Achternaam:<br>
			<input type="text" name="achternaam" placeholder="Achternaam" required><br>
			E-mail:<br>
			<input type="text" name="mail" placeholder="E-mail" required><br>
			Telefoonnummer:<br>
			<input type="text" name="telefoonnummer" placeholder="06 - 12345678"><br>
			Uw vraag:<br>
			<textarea name="vraag" placeholder="Uw vraag ..." required></textarea><br>
			<input type="submit" value="Verzenden">
	</fieldset>
</form>
<?php 
	$voornaam = $_POST["voornaam"];
	$achternaam = $_POST["achternaam"];
	$mail = $_POST["mail"];
	$telefoon = $_POST["telefoonnummer"];
	$vraag = $_POST["vraag"];

	if (!$voornaam) {
	} 
	else {
		echo "<br>"."<br>"."Voornaam: ".$voornaam."<br>";
		echo "Achternaam: ".$achternaam."<br>";
		echo "E-mail: ".$mail."<br>";
		echo "Telefoonnummer: ".$telefoon."<br>";
		echo "Vraag: ".$vraag."<br>";
	}
?>