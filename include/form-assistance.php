
<?php 

    function afficherFormAssistance()
    {

        require_once 'connexion.class.php';
        $ConnexionBaseSIO = new Connexion();
        $IDconnexion = $ConnexionBaseSIO->IDconnexion;
?>
<div class="element" style="border-right-style: none;">
<?php
                if(isset($_POST['produit']))
                {

                    $pb = $IDconnexion->query("SELECT * FROM probleme");
?>
                    <div id="div-assist">

                        <form ACTION="#" METHOD="POST">

                            <p>Créer un ticket</p>

                            <hr />

                            <label for="titre">Sujet :</label>
                            <input type="text" name="titre" placeholder="Sujet de votre ticket" required autofocus />
                            <label style="display: block;" for="probleme">Type de problème : </label>
                            <select style="width: 250px;  margin-left: 10px;" name="probleme" required>
<?php                           foreach($pb as $donnees): ?>
                                    <option name=<?php echo $donnees->NUMPROB;?> > <?php echo $donnees->LIBELLEPROB;?></option>
<?php                           endforeach; ?>
                            </select>
                            <label style="display: block;" for="desc">Description de votre soucis</label>
                            <textarea name="desc" placeholder="description de votre problème" style="height: 300px; width: 300px;" required> </textarea>
                            <input type="hidden" name="idprod" value=<?php echo $_POST['produit']; ?> />
                            <input type="submit" name="submit" />

                        </form>

                    </div>

<?php           }

                else if(isset($_POST['titre']))
                {
                    echo $_POST['idprod'];
                    $requete = $IDconnexion->prepare("INSERT INTO ticket (NUMCLIENT, NUMPROB, NUMPROD, DESCRIPTION, FINI) VALUES (:id_client, :id_prob, :id_prod, :id_desc, :id_fin)");
                    $requete->bindValue(':id_client', $_SESSION['id'], PDO::PARAM_INT);
                    $requete->bindValue(':id_prob', $_POST['probleme'], PDO::PARAM_INT);
                    $requete->bindValue('id_prod', $_POST['idprod'], PDO::PARAM_INT);
                    $requete->bindValue(':id_desc', $_POST['desc'], PDO::PARAM_STR);
                    $requete->bindValue(':id_fin', 'o', PDO::PARAM_STR);
                    $requete->execute();

                    echo "Votre ticket a été créer !";

                }

                else if(!isset($_POST['produit'])) 
                {?>
                    <div id="div-assist">
<?php                   $prod = $IDconnexion->prepare("SELECT * FROM produit 
                        INNER JOIN garantie ON produit.NUMPROD = garantie.NUMPROD WHERE NUMCLIENT = :id_client");
                        $prod->bindValue('id_client', $_SESSION['id'], PDO::PARAM_INT);
                        $prod->execute();
                        $result = $prod->rowCount();
?>
    				<form action="#" method="POST">
    						<p>Assistance sur un produit</p>
    						<hr/>
    					<label for="produit">Produit a dépanner : </label><select name="produit" style="width: 200px;">
    						  <?php  

                                foreach($prod as $donnees): ?>

                                    <option name=<?php echo $donnees['NUMPROD'];?> > <?php echo $donnees['LIBELLEPROD'];?></option> 
<?php  
                                endforeach;
                                $prod->CloseCursor(); ?>                        
    					</select>
    					<input type="submit" name="submit" id="submit" />
    				</form>
                    </div>
<?php           }
    			
                
                
?>


</div>

<?php } ?>