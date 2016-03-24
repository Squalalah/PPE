<?php 

    function afficherFormContact()
    {

?>
<div class="element" style="border-right-style: none;">
    			<div id="div-contact">

<?php           if(!isset($_POST['contact'])) 
                { 
?>
    				<form action="#" method="POST">
    						<p>Contact</p>
    						<hr/>
    					<label for="contact">Sujet : </label><input type="text" name="contact" placeholder="Sujet" />
                        <label for="message">Message : </label><textarea name="message" placeholder="Votre message..."> </textarea>
    					<input type="submit" name="submit" id="submit" />
    				</form>
<?php           }
                else if(empty($_POST['contact']) OR empty($_POST['message'])) echo "Sujet ou message vide !";
                else echo 'Formulaire correct et envoyé !';
?>
    			</div>
</div>

<?php } ?>