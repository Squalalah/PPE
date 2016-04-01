

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
					<p>Support</p></a>
				</div>
				<div class="enfant">
					<a href="#"><img src="img/parametres.png" alt="Mes options" />
					<p>Paramètres</p></a>
				</div>
<?php
					if(isset($_GET['ticket']))
					{
                		if($_GET['ticket'] == $_SESSION['id'])
						{
							require_once 'connexion.class.php';
                			$ConnexionBaseSIO = new Connexion();
                			$IDconnexion = $ConnexionBaseSIO->IDconnexion;
                			$ticket = $IDconnexion->prepare("SELECT * FROM ticket WHERE id_client = :id_client");
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
											<th>Dernière Reponse</th>
										</tr>

<?php 									if($sql > 0)
										{ 
											foreach($ticket as $donnees):
												if($donnees['etat_ticket'] == 0) $etat = "Fermé";
												else $etat = "Ouvert";?>
												<tr>
													<td><?php echo $donnees['id_ticket']; ?></td>
													<td><?php echo $donnees['desc_ticket']; ?></td>
													<td><?php echo $etat; ?></td>
													<td><?php echo $donnees['date_ticket']; ?></td>
												</tr>
<?php 										endforeach;
										}?>

									</table>
								</div>
<?php						}?>
						</div>
<?php        		}?>
				</div>
			</div>
			
		</div>
<?php
	}

?>