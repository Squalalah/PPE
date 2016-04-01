<?php 
    
    
    function afficherFormLogin()
    { ?>
    <?php   if(isset($_POST['pseudo']) AND isset($_POST['password']))
            {
                require_once 'connexion.class.php';
                $ConnexionBaseSIO = new Connexion();
                $IDconnexion = $ConnexionBaseSIO->IDconnexion;

                $pseudo = $_POST['pseudo'];
                $password = $_POST['password'];
                $verif = $IDconnexion->prepare("SELECT * FROM client WHERE pseudo = :pseudo AND password = :password");
                $verif->bindValue('pseudo', $pseudo, PDO::PARAM_STR);
                $verif->bindValue('password', $password, PDO::PARAM_STR);
                $verif->execute();
                $sql = $verif->rowCount();

                if($sql == 1)
                {
                    foreach($verif as $donnees)
                    {
                        $_SESSION['id'] = $donnees['id_client'];
                        $_SESSION['pseudo'] = $donnees['pseudo'];

                    }
                }

            }
            else
            {?>
                <div class="element" style="border-right-style: none;">
                    <div class="div-logreg">
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
<?php       } 
    }?>