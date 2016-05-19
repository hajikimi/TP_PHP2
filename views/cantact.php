
<?php include 'header.php';?>

<?php
$nomErr = $prenomErr = $courrielErr  =$telephoneErr = "";
$nom = $prenom = $courriel  = $telephone = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (empty($_POST["nom"])) {
		$nomErr = "Nom obligatoire";
	} else {
		$nom = test_input($_POST["nom"]);


		if (!preg_match("/^[a-zA-Z ]*$/",$nom)) {
			$nomErr = "Seulement des lettre ";
		}
	}
	if (empty($_POST["prenom"])) {
		$prenomErr = "Prenom obligatoire";
	} else {
		$prenom = test_input($_POST["prenom"]);


		if (!preg_match("/^[a-zA-Z ]*$/",$prenom)) {
			$prenomErr = "Seulement des lettre ";
		}
	}

	if (empty($_POST["courriel"])) {
		$courrielErr = "courriel obligatoire";
	} else {
		$courriel = test_input($_POST["courriel"]);


		if (!filter_var($courriel, FILTER_VALIDATE_EMAIL)) {
			$courrielErr = "Courriel invalide";
		}
	}

	if (empty($_POST["telephone"])) {
		$telephoneErr = "telephone obligatoire";
	} else {
		$telephone = test_input($_POST["telephone"]);

		if (!preg_match("#(\+[0-9]{2}\([0-9]\))?[0-9]{10}#",$telephone)) {
			$telephoneErr = "Numero telephone inccorect ";

		}

	}

}

function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

?>


		<div id="content_contact">
			<h1>Contactez-Nous</h1>
			<img src="../media/images/img13.jpg"/>
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
				<fieldset>
					<legend>Vos coordonnées:</legend>
					<div>
						<label for="nom">Nom:</label>
						<input type="text" name="nom" id="nom" value="<?php echo $nom;?>" />
						<span class="error">* <?php echo $nomErr;?></span>
					</div>
					<div>
						<label for="prenom">Prénom:</label>
						<input type="text" name="prenom" id="prenom" value="<?php echo $prenom;?>"/>
						<span class="error">* <?php echo $prenomErr;?></span>
					</div>
					<div>
						<label for="telephone">Téléphone:</label>
						<input type="text" name="Téléphone" id="telephone" value="<?php echo $telephone;?>"/>
						<span class="error">* <?php echo $telephoneErr;?></span>
					</div>
					<div>
						<label for="courriel">Courriel:</label>
						<input type="text" name="courriel" id="courriel" value="<?php echo $courriel;?>" />
						<span class="error">* <?php echo $courrielErr;?></span>
					</div>
				</fieldset>
				<div id="w">
					<input type="checkbox" name="souhaite" id="souhaite" value=""/>
					<label for="souhaite">Je souhaite recevoir nos offres promotionelles.</label>
				</div>
				<fieldset>
					<legend>Vos commentaires:</legend>
					<div class="right">
						<div>
							<textarea></textarea>
						</div>
						<div>
							<input type="submit" name="soumettre" value="Soumettre" class="bouton"/>
							<input type="reset" name="réinitialiser" value="Réinitialiser" class="bouton"/>
							</div>
					</div>
				</fieldset>
				
				
				
			</div>
			
		</div>

<?php require_once('views/footer.php');
