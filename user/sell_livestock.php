<?php 
	include("master.php");

	?>
	

  <div class = "wrapper1">	
  		  
<form action="sell_animal.php" method="post" enctype="multipart/form-data">
 
<fieldset>
		<legend>Livestock Information Capture Form</legend> 
	<table width = "100%">
		
		<tr>
			<td>
			<div class="form-group">
						<label>Type of Animal:</label> <br>
							<select id="Category" name="Category" maxlength="100" class = "form-control1" >
								<option value="Dairy Cattle" >Dairy Cattle</option>
								<option value="Beef Cattle">Beef Cattle</option>
								<option value="Goats" selected="selected">Goat</option>
								<option value="Sheep">Sheep</option>
								<option value="Donkeys">Donkey</option>
								<option value="Carmels">Carmel</option>
								<option value="Swine">Swine</option>
								<option value="Pets">Pets</option>
							</select>
			</div>
			</td><td>
			<div class="form-group">				
				<label>Crossbred/Purebred:</label> <br>
				<select id="Purebred" name="Purebred" class = "form-control1">
				<option value="Crossbred" selected="selected">Crossbred</option>
				<option value="Purebred">Purebred</option>
				</select>
			</div>
			</td></tr>
			<tr><td>
			<div class="form-group">
				 <label>Age of the Animal :</label><br>
				<input name="Age" id="Age"type="TEXT" class = "form-control1">&nbsp;Months
			</div>	
			</td><td>
			<div class="form-group">
				<label>Animal Approx Weight:</label><br> 						 
				 <input name="Weight" id="Weight"  type="TEXT" class = "form-control1">&nbsp;Kgs
			</div>
			</td></tr>
			<tr><td>
			<div class="form-group">				
				<label>Animal Breed:</label> <br>  
							<input list="Breed" name="Breed" class = "form-control1" required> 
							  <datalist id="Breed">
									<option value = "Sheep">
									<option value = "Swine">
									<option value = "Pets">
									<option value = "Donkeys">
									<option value = "Carmels">
									<option value = "Aberdeen Angus">
									<option value = "Africander">
									<option value = "Aubrac">
									<option value = "Barzona">
									<option value = "Bazadaise">
									<option value = "Beef Shorthorn">
									<option value = "Beefalo">
									<option value = "Beefmaster">
									<option value = "Belgian Blue">
									<option value = "Belmont Red">
									<option value = "Belted Galloway">
									<option value = "Blonde d'Aquitaine">
									<option value = "Bonsmara">
									<option value = "Boran">
									<option value = "Braford">
									<option value = "Brahman">
									<option value = "Brahmousin">
									<option value = "Brangus">
									<option value = "British White">
									<option value = "Buelingo">
									<option value = "Canchim">
									<option value = "Caracu">
									<option value = "Charolais">
									<option value = "Chianina">
									<option value = "Composite">
									<option value = "Corriente">
									<option value = "Devon">
									<option value = "Dexter">
									<option value = "Drakensberger">
									<option value = "Droughtmaster">
									<option value = "English Longhorn">
									<option value = "Galloway">
									<option value = "Gelbvieh">
									<option value = "Gloucester">
									<option value = "Hays Converter">
									<option value = "Hereford">
									<option value = "Highland">
									<option value = "Hybridmaster">
									<option value = "Limousin">
									<option value = "Lincoln Red">
									<option value = "Lowline">
									<option value = "Luing">
									<option value = "Maine-Anjou (Rouge des Prés)">
									<option value = "Marchigiana">
									<option value = "Miniature Hereford">
									<option value = "Mirandesa">
									<option value = "Mongolian">
									<option value = "Murray Grey">
									<option value = "Nelore">
									<option value = "Nguni">
									<option value = "Parthenais">
									<option value = "Piemontese">
									<option value = "Pinzgauer">
									<option value = "Red Angus">
									<option value = "Red Poll">
									<option value = "Retinta">
									<option value = "Romagnola">
									<option value = "Salers">
									<option value = "Sanganer">
									<option value = "Santa Cruz">
									<option value = "Santa Gertrudis">
									<option value = "Senepol">
									<option value = "Shetland">
									<option value = "Simbrah">
									<option value = "Simmental">
									<option value = "South Devon">
									<option value = "Speckle Park">
									<option value = "Square Meaters">
									<option value = "Sussex">
									<option value = "Tarentaise">
									<option value = "Texas Longhorn">
									<option value = "Tuli">
									<option value = "Wagyu">
									<option value = "Watusi">
									<option value = "Welsh Black">
									<option value = "Whitebred Shorthorn">
									<option value = "Zebu">
									<option value = "Ayrshire">
									<option value = "Brown Swiss">
									<option value = "Guernsey">
									<option value = "Holstein">
									<option value = "Jersey">
									<option value = "Milking Shorthorn">
									<option value = "Alpine">
									<option value = "LaMancha">
									<option value = "Nigerian Dwarf">
									<option value = "Nubian">
									<option value = "Oberhasli">
									<option value = "Saanen">
									<option value = "Sable">
									<option value = "Toggenburg">
									<option value = "Boer">
									<option value = "Genemaster">
									<option value = "Kiko">
									<option value = "Kinder">
									<option value = "Myotonic">
									<option value = "Pygmy">
									<option value = "Savanna">
									<option value = "Spanish">
									<option value = "Tennessee Meat Goat">
									<option value = "TexMaster">
									<option value = "Angora">
									<option value = "Cashmere">
									<option value = "Pygora">					 
								</datalist>
			</div>
			</td><td>
			<div class="form-group">
				<label>Animal Location</label> <br>    
							<input list="Location" name="Location" class = "form-control1">
							  <datalist id="Location">
									  <option value="Mombasa County, Kenya">
									  <option value="Kwale County, Kenya">
									  <option value="Kilifi County, Kenya">
									  <option value="Tana River County, Kenya">
									  <option value="Lamu County, Kenya">
									  <option value="Taita Taveta County, Kenya">
									  <option value="Garissa County, Kenya">
									  <option value="Wajir County, Kenya">
									  <option value="Mandera County, Kenya">
									  <option value="Marsabit County, Kenya">
									  <option value="Isiolo County, Kenya">
									  <option value="Meru County, Kenya">
									  <option value="Tharaka Nithi County, Kenya">
									  <option value="Embu County, Kenya">
									  <option value="Kitui County, Kenya">
									  <option value="Machakos County, Kenya">
									  <option value="Makueni County, Kenya">
									  <option value="Nyandarua County, Kenya">
									  <option value="Nyeri County, Kenya">
									  <option value="Kirinyaga County, Kenya">
									  <option value="Muranga County, Kenya">
									  <option value="Kiambu County, Kenya">
									  <option value="Turkana County, Kenya">
									  <option value="West Pokot County, Kenya">
									  <option value="Samburu County, Kenya">
									  <option value="Trans-Nzoia County, Kenya">
									  <option value="Uasin Gishu County, Kenya">
									  <option value="Elgeyo Marakwet County, Kenya">
									  <option value="Nandi County, Kenya">
									  <option value="Baringo County, Kenya">
									  <option value="Laikipia County, Kenya">
									  <option value ="Nakuru County, Kenya">
									  <option value="Narok County, Kenya">
									  <option value="Kajiando County, Kenya">
									  <option value="Kericho County, Kenya">
									  <option value="Bomet County, Kenya">
									  <option value="Kakamega County, Kenya">
									  <option value="Vihiga County, Kenya">
									  <option value="Bungoma County, Kenya">
									  <option value="Busia County, Kenya">
									  <option value="Siaya County, Kenya">
									  <option value="Kisumu County, Kenya">
									  <option value="Homabay County, Kenya">
									  <option value="Migori County, Kenya">
									  <option value="Kisii County, Kenya">
									  <option value="Nyamira County, Kenya">
									  <option value="Nairobi County, Kenya">
								</datalist>
			</div>
			</td></tr>
			<tr><td>
			<div class="form-group">
				<label>Date of Auction :</label><br>		
				<input name="AuctionDate" id="AuctionDate"  type="date" class = "form-control1">
			</div>
			</td><td>
			<div class="form-group">
				<label>Farmer Quoted Price in Kshs.:</label><br>							 
				<input type="text" name="currency-field" id="currency-field" pattern="^\$\d{1,3}(,\d{3})*(\.\d+)?$" value="" data-type="currency" placeholder="$1,000,000.00" class = "form-control1">
			</div>
			</tr></td>
			<tr><td>
			<div class="form-group">
			 <label>Specify Method of Payment:</label>	<br>					 
			 <select name="PaymentMethod" id="PaymentMethod" class = "form-control1">
					<option selected="selected" value="Cash">Cash</option>
					<option value="Bank">Bank</option>
					<option value="Mpesa">M-pesa</option>					
					<option value="Any">Any Other</option>
				</select>
			</div>
			</td><td>
	<div class="form-group">
    <input type="file" name="file">
	</div>
	</td></tr>

	<tr width = "100%"><td colspan = "2">
	<div class="form-group">
    <input type="submit" name="submit" value="Sell Livestock">
</div>
	</td></tr>
	</fieldset>
</table>
</form>
<div class = "footer">
	Livestock@2022
</div>
</div>
