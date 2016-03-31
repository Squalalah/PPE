

<?php
	
	function afficherGererCompte()
	{

		?>



		<div id="element">

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
				{?>
					<div class="enfant">
<?php 					if($_GET['ticket'] == $_SESSION['id'])
						{?>
							<div id="tableau">
								<table>
									<tr>
										<th>N°Ticket</th>
										<th>Description</th>
										<th>Etat</th>
										<th>Dernière Reponse</th>
									</tr>
									<tr>
										<td>1</td>
										<td>Un ticket spécifique</td>
										<td>Ouvert</td>
										<td>Hier</td>
									</tr>
								</table>
							</div>
<?php					}?>
					</div>
<?php        	}?>
			</div>

		</div>
<?php
	}

?>