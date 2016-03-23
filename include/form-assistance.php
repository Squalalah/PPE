
<?php 

    function afficherFormAssistance()
    {

?>
<div class="element" style="border-right-style: none;">
    			<div id="div-assist">

<?php           if(!isset($_POST['produit'])) 
                { 
?>
    				<form action="#" method="POST">
    						<p>Assistance sur un produit</p>
    						<hr/>
    					<label for="produit">Produit a dépanner : </label><select name="produit">
    						<option name="pd1">Yolo</option>
    						<option name="pd2">Test</option>
    					</select>
    					<input type="submit" name="submit" id="submit" />
    				</form>
<?php           } 
?>
    			</div>
    		</div>

<?php } ?>