<?php 

    function afficherFormRegister()
    { ?>


<div class="element" style="border-right-style: none;">
    			<div class="div-logreg">
    				<p class="imp">Inscription</p>
    				<hr />
    				<form action="#" method="POST">

    					<label for="ins-pseudo">Nom d'utilisateur : </label><input type="text" title="ins" name="ins-pseudo" placeholder="Pseudonyme choisi" required autofocus /><br />
    					<label for="ins-password">Mot de passe : </label><input type="text" title="ins" name="ins-password" placeholder="Mot de passe choisi" required /><br />
    					<label for="insc-password">Confirmer mot de passe : </label><input type="text" title="ins" name="insc-password" required /><br />
    					<label for="ins-mail">Adresse Mail : </label><input type="email" title="ins" name="ins-mail" required /><br />
    					<p>En vous inscrivant, vous allez lu et approuvé nos <a href="#">Conditions Générales d'Utilisation</a>.</p><br />
    					<input type="submit" id="submit" name="ins-submit" value="Valider" />

    				</form>
    			</div>
			</div>

<?php } ?>