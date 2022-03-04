<?php
session_start();
require_once('database.php');
$cid = ''; 
if( isset( $_GET['cid'])) {
    $cid = $_GET['cid']; 
} 
$sql = mysqli_query($dbConn,"select * from tbl_courier where cid='$cid'"); // select query

$data = mysqli_fetch_array($sql); // fetch data

//$sql = "SELECT * FROM tbl_courier WHERE cid = '$id'";

//$result = dbQuery($sql);		

/**while($data = dbFetchAssoc($result)) {
extract($data);**/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
	<title>Edit Livestock</title>
	<link href="css/mystyle.css" rel="stylesheet" type="text/css">
	<link href="css/style.css" rel="stylesheet" type="text/css">
	<style type= "text/css">
	.style1 {color: #FF0000}
	.style3 {font-family: verdana, tohama, arial}
	</style>
	</head>
	<body>

			<table border="0" cellpadding="0" cellspacing="0" align="center" width="900">
				<tbody>
				<tr>
					<td width="900">
						<?php include("header.php"); ?>

					</td>
				</tr>
				<tr>
			<td bgcolor="#FFFFFF">
	
			<style type="text/css">
			.ds_box {
				background-color: #FFF;
				border: 1px solid #000;
				position: absolute;
				z-index: 32767;
			}
			.ds_tbl {
				background-color: #FFF;
			}
			.ds_head {
				background-color: #333;

				color: #FFF;

				font-family: Arial, Helvetica, sans-serif;

				font-size: 13px;

				font-weight: bold;

				text-align: center;

				letter-spacing: 2px;

			}
			.ds_subhead {
				background-color: #CCC;
				color: #000;
				font-size: 12px;
				font-weight: bold;
				text-align: center;
				font-family: Arial, Helvetica, sans-serif;
				width: 32px;
			}
			.ds_cell {
				background-color: #EEE;
				color: #000;
				font-size: 13px;

				text-align: center;

				font-family: Arial, Helvetica, sans-serif;

				padding: 5px;

				cursor: pointer;

			}
			.ds_cell:hover {
				background-color: #F3F3F3;
			} /* This hover code won't work for IE */
			</style>
			<style type="text/css">
			<!--

			body {

				margin-left: 0px;

				margin-top: 0px;

				margin-right: 0px;

				margin-bottom: 0px;
			}
			-->
			</style>

			<table class="ds_box" id="ds_conclass" style="display: none;" cellpadding="0" cellspacing="0"> 
				<tbody>
				<tr> 

					<td id="ds_calclass"> </td>
				</tr> 

				</tbody>
			</table> 

			<br>
			<?php
				if(isset($_POST['submit']))
				{
					$cid = $_REQUEST['cid'];
					$cons_no = $_REQUEST['cons_no'];
					$ship_name = $_REQUEST['ship_name'];
					$phone	=$_POST['phone'];
					$s_add	=$_POST['s_add'];
					$rev_name =$_POST['rev_name'];
					$r_phone =$_POST['r_phone'];
					$r_add	=$_POST['r_add'];
					$type	=$_POST['type'];
					$fileToUpload =$_POST['fileToUpload'];
					$book_mode =$_POST['book_mode'];
					$pick_date = date('pick_date');
					$update= mysqli_query($dbConn, "update tbl_courier set cons_no = '$cons_no', ship_name= '$ship_name', phone ='$phone', s_add ='$s_add', rev_name ='$rev_name', r_phone ='$r_phone', r_add ='$r_add', type ='$type', fileToUpload ='$fileToUpload', book_mode ='$book_mode', pick_date = '$pick_date' where cid = '$cid'"); 

				   if($update)
					{
						
						mysqli_close($dbConn); // Close connection
						
						//header("location: delivered-list.php"); // redirects to delivered page
						exit;
					}
				else 
					{
						echo 'errors';
					}
				}
		?>
		 <form name="form" method="POST" action="">
			<table border="0" align="center" width="98%">
				<tbody>
					<tr>
						<td class="Partext1" bgcolor="F9F5F5" align="center"><strong>Edit Livestock </strong></td>
					</tr>
				</tbody>			
			</table>
		<br>
	<table bgcolor="#EEEEEE" cellpadding="2" cellspacing="2" align="center" width="75%"> 
    <tbody><tr>
      <td class="Partext1" bgcolor="#FFFFFF" align="right"><div align="center">	  

        <table border="0" cellpadding="1" cellspacing="1" width="60%">
          <tbody><tr>
            <td width="55%"><div align="center" class="style3">Animal Name : </div></td>
            <td width="45%"><div align="left" class="style3">
              <input name="Shipperphone" id="Shipperphone" maxlength="13" size="40" type="TEXT"value="<?php echo $data['ship_name'];?>" />
            </div>
		</td>
          </tr>
          <tr>
            <td><div align="center" class="style3">Animal Age : </div></td>
            <td><div align="left" class="style3"> 
			<input name="Shipperphone" id="Shipperphone" maxlength="13" size="40" type="TEXT"  value="<?php echo $data['phone'];?>" />&nbsp;Months</p>
            </div>
			</td>
          </tr>
          <tr>
            <td><div align="center" class="style3">Brief Description of the Animal : </div></td>
            <td><div align="left" class="style3">
			<textarea type="TEXT" name="s_add" placeholder="may be the color of the animal, etc"  value="<?php echo $data['s_add'];?>" /></textarea>
			</div></td>
          </tr>
        <tr>
            <td width="55%" class="style3"><div align="center"> Animal Approx Weight : </div>&nbsp;</td>

            <td width="45%" class="style3"><div align="left">			
			<input name="Receivername" id="Receivername" maxlength="100" size="40" type="TEXT" required value="<?php echo $data['rev_name'];?>" />&nbsp;Kgs</p>
			</div></td>
          </tr>
          <tr>
            <td class="style3"><div align="center">Animal Price : </div></td>
            <td class="style3"><div align="left">
			<input name="Receiverphone" id="Receiverphone" maxlength="13" size="40" type="TEXT"  value="<?php echo $data['r_phone'];?>" /></p>
            </div></td>
          </tr>
          <tr>
            <td class="style3"><div align="center">Animal Location/contstituency/ward: </div></td>
            <td class="style3"><div align="left">
			<textarea type="TEXT" name="s_add" placeholder="state the county,	constituency and ward"  value="<?php echo $data['r_add'];?>" /></textarea>
			</div></td>
          </tr>
       </td>
    </tr>
    <tr> 
      <td class="style3" bgcolor="#FFFFFF" align="center" width="336">Animal Number : </td>
      <td class="style3" bgcolor="#FFFFFF" width="394"><font color="#FF0000">
	  <input type="text" name="cons_no"  value="<?php echo $data['cons_no'];?>" /></p></font></td> 
    </tr>

    <tr>
      <td class="TrackMediumBlue"  align="center">Animal Sex :</td>     
            <td>
			<select id="Shiptype" name="Shiptype" width = "50">
                <option value="Female" selected="selected"><?php echo $data['type'];?></option>
                <option value="Male">Male</option>
                <option value="Both">Both</option>
			</select></td>
    </tr>
   <tr>
		</br></br>
    <td class="style3" bgcolor="#F3F3F3" align="center">Preferred Method of Payment :</td>			
	<td><select name="Bookingmode" id="Bookingmode">
                <option selected="selected" value="Cash"><?php echo $data['book_mode'];?></option>
                <option value="Bank">Bank</option>
                <option value="Mpesa">M-pesa</option>
            </select>	
	  </td>
    </tr>
    <tr> 
      <td class="style3" bgcolor="#FFFFFF" align="center">Auction Date  :</td> 

      <td class="style3" bgcolor="#FFFFFF">
	  <input type="text" name="pick_date" placeholder="Enter Name" required value="<?php echo $data['pick_date'];?>" /></p>
        </span> </td> 
    </tr> 
    <tr> 
      <td class="style3" bgcolor="#FFFFFF" align="center">Picture Upload :</td> 
      <td class="style3" bgcolor="#FFFFFF">
	  <input type="file" name="fileToUpload"  required value="<?php echo $data['fileToUpload'];?>" /></p>
	  <td> <p><input name="submit" type="submit" value="Update" /></p></td>
	  </td> 
	  <td class="style3" bgcolor="#FFFFFF">	  
	  </td>
    </tr> 	
  </tbody>
 </table> 
 <br>
 </form>   
 </td>

  </tr>

  <tr>
	<td><table border="0" cellpadding="0" cellspacing="0" align="center" width="900">
		<tbody><tr>
			<td bgcolor="#2284d5" height="40" width="476">&nbsp;</td>
			<td bgcolor="#2284d5" width="304"><div align="right"></div></td>
		  </tr>
		</tbody>
	</table>
		</td>

  </tr>

	</tbody>
</table>





</body></html>
