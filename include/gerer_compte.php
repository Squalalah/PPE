

<?php
	
	function afficherGererCompte()
	{

		require_once 'connexion.class.php';
      	$ConnexionBaseSIO = new Connexion();
        $IDconnexion = $ConnexionBaseSIO->IDconnexion;
        $IDmessage = $ConnexionBaseSIO->IDmessage;
		?>



		<div class="element">

			<div id="parent">
				<div class="enfant">
					<a href=<?php echo "?ticket=" . $_SESSION['id']; ?>><img src="img/icon_phone_ticket.png" alt="Mes tickets" />
					<p>Mes tickets</p></a>
				</div>
				<div class="enfant">
					<a href="#"><img src="img/support.png" alt="Support" />
					<p>Support</p>[CONSTRUCTION]</a>
				</div>
				<div class="enfant">
					<a href=<?php echo "?param" ?>><img src="img/parametres.png" alt="Mes options" />
					<p>Ajouter un produit</p>[CONSTRUCTION]</a>
				</div>
<?php
					
					if(isset($_GET['ticket']) AND !isset($_GET['contenu']))
					{

                		if($_GET['ticket'] == $_SESSION['id'])
						{
							
                			$ticket = $IDconnexion->prepare("SELECT NUMTICKET, DESCRIPTION, FINI, NUMCLIENT FROM ticket WHERE NUMCLIENT = :id_client");
                			$ticket->bindValue('id_client', $_SESSION['id'], PDO::PARAM_INT);
                			$ticket->execute();
                			$sql = $ticket->rowCount(); ?>
						<div class="enfant">
								<div id="tableau">
									<table>
										<tr class="tr-th">
											<th class="th">N°Ticket</th>
											<th class="th">Description</th>
											<th class="th">Etat</th>
										</tr>

<?php									if($sql > 0)
										{ 
											foreach($ticket as $donnees):
												if($donnees['FINI'] == "n") $etat = "Fermé";
												else $etat = "Ouvert";?>
												<tr>
													<td class="td"><a href=<?php echo "?contenu=" . $donnees['NUMTICKET'];?>>
														<?php echo $donnees['NUMTICKET'];?> </a></td>
													<td class="td"><?php echo $donnees['DESCRIPTION']; ?></td>
													<td class="td"><?php echo $etat; ?></td>
												</tr>
<?php 										endforeach;
										} ?>
									</table>
								</div>
<?php					$ticket->CloseCursor();
						}
						else header('Location: compte.php');?>
						</div>
<?php        		}
					else if (isset($_GET['contenu']) AND !isset($_GET['ticket']))
					{

							// A rajouter, moyen de sécurité pour éviter qu'une autre personne lise les messages d'une autre personne.
							// Solution : reussir à implanter deux GET dans l'URL quand on clique sur le numéro de ticket
							$contenu = $_GET['contenu'];
							$message = $IDconnexion->prepare("SELECT * FROM message WHERE NUMTICKET = :id_ticket ORDER BY DateMessage");
                			$message->bindValue('id_ticket', $contenu, PDO::PARAM_INT);
                			$message->execute();
                			$squa = $message->rowCount();
                			 ?>

                			 <div class="enfant">
								<div id="tableau">
									<table>
										<tr>
											<th>Numéro</th>
											<th>Auteur</th>
											<th>Contenu</th>
											<th>Envoyé le :</th>
										</tr>

<?php									if($squa > 0)
										{
											foreach($message as $data):
												?>
												<tr>
													<td><?php echo $data['NUMMESSAGE']; ?></a></td>
													<td><?php echo $data['UTILISATEUR']; ?></td>
													<td><?php echo $data['DESCRIPTION']; ?></td>
													<td><?php echo $data['DateMessage']; ?></td>
												</tr>
<?php 										endforeach;
										} ?>
									</table>
								</div>
							</div>
<?php				}
					else if (isset($_GET['param']))
					{ ?>

						<div class="enfant">
						<p>Ajouter un produit
						<form action="compte.php" METHOD="POST">
							<label for="serial1" style="display: block;">Clé de série :</label>
							<input type="text" style="width: 75px;" name="serial1" maxlength="4" required />
							<input type="text" style="width: 75px;" name="serial2" maxlength="4" required />
							<input type="text" style="width: 75px;" name="serial3" maxlength="4" required />
							<input type="text" style="width: 75px;" name="serial4" maxlength="4" required />

							<input type="submit" name="submit" />
						</form>
						</div>

<?php				}
					else if(isset($_POST['serial1']))
					{
						$codeg = $_POST['serial1'] . "-" . $_POST['serial2'] . "-" . $_POST['serial3'] . "-" . $_POST['serial4'];
						$code = $IDconnexion->prepare("SELECT * FROM garantie WHERE CODEGARANTIE = :id_garantie");
						$code->bindValue('id_garantie', $codeg, PDO::PARAM_STR);
						$code->execute();
                		$result = $code->rowCount();
                		if($result > 0)
                		{
                			$lien = $IDconnexion->prepare("UPDATE garantie SET NUMCLIENT = :id_client WHERE CODEGARANTIE = :id_garantie");
                			$lien->bindValue('id_client', $_SESSION['id'], PDO::PARAM_INT);
                			$lien->bindValue('id_garantie', $codeg, PDO::PARAM_STR);
                			$lien->execute();
                		}
                		else echo "Code inexistant";
                		$code->CloseCursor();

					}
 ?>
				</div>
			</div>
<?php
	}

?>