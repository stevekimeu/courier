		<?php
		include ("master.php");

		if (!empty($_REQUEST['search'])) {
		Global $dbConn;
		$search = mysqli_real_escape_string($dbConn, $_REQUEST['search']);     

		$sql = "SELECT * FROM tbl_courier WHERE (`category` LIKE '%".$search."%') OR (`location` LIKE '%".$search."%') OR (`sex` LIKE '%".$search."%') OR (`price` LIKE '%".$search."%') OR (`description` LIKE '%".$search."%') OR (`auction_date` LIKE '%".$search."%')"  OR die(mysql_error());

		$result = mysqli_query($dbConn, $sql)or die( mysqli_error($dbConn));
		
		if(mysqli_num_rows($result) > 0){
		?>
		<div class = "childpane">
			<div class = "searchoutput">
				<p>Search Results...</p>
				<table width = "100%">      
					  <tr class="BoldRED" bgcolor="#FFFFFF" style="height:20px;" style =>
						  <td style="font-weight:bold"  width="20%">Animal Picture</td>
						  <td style="font-weight:bold"  width="15%">Animal Category</td>
						  <td style="font-weight:bold"  width="10%">Purebreed/Crossbred</td>
						  <td style="font-weight:bold"  width="10%">Weight</td>
						  <td style="font-weight:bold"  width="10%">Price</td>
						  <td style="font-weight:bold"  width="15%">Location</td>
					  </tr>
					<?php
					while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
					$imageURL = 'uploads/'.$row["picture"];
					?>
						<tr onMouseOver="this.bgColor='#FAFAD2';" onMouseOut="this.bgColor='#FFFFFF';" bgcolor="#FFFFFF">	      
							<td><img src="<?php echo $imageURL; ?>" width ="100%" height = "140" alt = "No Picture"/></td>
							<td><?php echo $row['category']; ?> </td>
							<td><?php echo $row['sex']; ?> </td>
							<td><?php echo $row['weight']; ?>Kgs</td>
							<td>Kshs.<?php echo $row['price']; ?></td>
							<td><?php echo $row['location']; ?></td>
							<td><a href = "moredetails.php?cid=<?php echo $row['cid']; ?>">View</a></td>							
							</td>
						</tr>
						
							<?php
								}
							}
							
				else {
					
			?>
			<div class = "childpane">
				<div class = "searchoutput">
				<?php
					echo 'Nothing found!';
				}
			}
				 else 
				{
					?>
					</div>
				</div>
				<div class = "childpane">
				<div class = "searchoutput">
				<?php
					echo 'Nothing to search!';					
				
					}
					
					?>
					</div>
				</div>
			</table>
		</div>
	</div>
				  