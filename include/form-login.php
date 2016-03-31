<?php 

    function afficherFormLogin()
    { ?>

            <div class="element" style="border-right-style: none;">
    			<div class="div-logreg" style="border-top-style: none;">
    				<p class="imp">Connexion</p>
    				<hr />
    				<form action="#" method="POST">

    					<label for="pseudo">Nom d'utilisateur : </label><input type="text" title="co" name="pseudo" placeholder="Votre pseudonyme" required autofocus /><br />
    					<label for="password">Mot de passe : </label><input type="password" title="co" name="password" placeholder="Votre mot de passe" required />
    					<input type="submit" id="submit" name="submit" value="Valider" />

    					<p>Note : En vous connectant au site, vous acceptez de perdre l'intégralité de vos droits</p>

    				</form>
    			</div>
			</div>

<?php } ?>