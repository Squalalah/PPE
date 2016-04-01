

<?php
	
	function afficherGererCompte()
	{
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
					<a href="#"><img src="img/parametres.png" alt="Mes options" />
					<p>Paramètres</p>[CONSTRUCTION]</a>
				</div>
<?php
					if(isset($_GET['ticket']))
					{
                		if($_GET['ticket'] == $_SESSION['id'])
						{
							require_once 'connexion.class.php';
                			$ConnexionBaseSIO = new Connexion();
                			$IDconnexion = $ConnexionBaseSIO->IDconnexion;
                			$ticket = $IDconnexion->prepare("SELECT id_ticket, desc_ticket, etat_ticket, EXTRACT(YEAR FROM date_ticket) AS AAAA,
							EXTRACT(MONTH FROM date_ticket) AS MM,
							EXTRACT(DAY FROM date_ticket) AS JJ, id_client FROM ticket WHERE id_client = :id_client");
                			$ticket->bindValue('id_client', $_SESSION['id'], PDO::PARAM_INT);
                			$ticket->execute();
                			$sql = $ticket->rowCount(); ?>
						<div class="enfant">
								<div id="tableau">
									<table>
										<tr>
											<th>N°Ticket</th>
											<th>Description</th>
											<th>Etat</th>
											<th>Crée le :</th>
										</tr>

<?php 									if($sql > 0)
										{ 
											foreach($ticket as $donnees):
												if($donnees['etat_ticket'] == 0) $etat = "Fermé";
												else $etat = "Ouvert";
												$date = $donnees['JJ'] . "/" . $donnees['MM'] . "/" . $donnees['AAAA']; ?>
												<tr>
													<td><?php echo $donnees['id_ticket']; ?></td>
													<td><?php echo $donnees['desc_ticket']; ?></td>
													<td><?php echo $etat; ?></td>
													<td><?php echo $date; ?></td>
												</tr>
<?php 										endforeach;
										} ?>
									</table>
								</div>
<?php					}
						else header('Location: compte.php');?>
						</div>
<?php        		}?>
				</div>
			</div>
<?php
	}

?>