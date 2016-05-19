<?php include 'header.php';?>
		<div id="content_contact">
			<h1>Contactez-Nous</h1>
			<img src="../media/images/img13.jpg"/>
			<form action="" method="get">
				<fieldset>
					<legend>Vos coordonnées:</legend>
					<div>
						<label for="nom">Nom:</label>
						<input type="text" name="nom" id="nom" value="" placeholder="tapez votre nom ici"/>
					</div>
					<div>
						<label for="prenom">Prénom:</label>
						<input type="text" name="prenom" id="prenom" value="" placeholder="tapez votre prénom ici"/>
					</div>
					<div>
						<label for="telephone">Téléphone:</label>
						<input type="tex" name="Téléphone" id="telephone" value="" placeholder="tapez votre numéro ici"/>
					</div>
					<div>
						<label for="courriel">Courriel:</label>
						<input type="text" name="courriel" id="courriel" value="" placeholder="tapez votre courriel ici"/>
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
