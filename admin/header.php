<?php 
//session_start();
?>
<link rel="icon" href="http://localhost/mulling_logo.jpg" type="image/icon type">
<table border="0" cellpadding="0" cellspacing="0" align="center" width="900">
  <tbody>
  <tr>
    <td>

</style>

<table border="0" cellpadding="0" cellspacing="0" width="900">
<tbody><tr>
<td colspan="15">
<a href = "admin.php"> <img src="images/mulling_logo.jpg" height="100" width="900"></a> </td>
</tr>
<img src="images/cow.jpg" width = "95" height = "45" style="float:left;border:0px; padding:10px;"/><h1>Livestock Online Markets For Convenience</h1>
<tr bgcolor="#2284d5">
<td height="30" width="110"><div align="center"><span class="headtext13 style2"><strong>																						</strong></span></div></td>
<td height="30" width="83"><div class="lowerstyle" align="center"> <a href="add-courier.php">Insert Livestock</a></div></td>
<td width="4"><div align="left">|</div></td>
<td height="30" width="74"> <div class="lowerstyle" align="center"><a href="courier-list.php">View Livestock</a></div></td>
<td width="4"><div align="left">|</div></td>
<td width="89"><div class="lowerstyle" align="center">
  <div align="center"><a href="search-edit.php">Search &amp; Edit </a></div>
</div></td>
<td width="3"><div align="left">|</div></td>
<td height="30" width="80"><div align="center"><span class="headtext13 style2"><strong>REPORTS</strong></span><span class="heading"><strong> : </strong></span></div></td>
<td height="30" width="83"><div class="lowerstyle" align="center"><a href="delivered-list.php">Update Livestock Details</a> </div></td>
<td width="3">|</td>
<td width="76"><div class="lowerstyle" align="center"><a href="datewise-list.php">Datewise </a> </div></td>
<td width="3">&nbsp;</td>
<td width="71"><div class="lowerstyle" align="center"><a href="http://tracking4web.com/admin/report_statuswise.php?status=all"></a> </div></td>
<td width="3"></td>
<td height="30" width="80">

</td>
</tr>

</tbody></table>

<?php
if(isset($_SESSION['user_type']) && $_SESSION['user_type'] == 'admin-role') {
?>
<table border="0" cellpadding="0" cellspacing="0" width="900">
  <tbody><tr style="height:25px;">
    <td bgcolor="#E2E2E2" width="4">&nbsp;</td>
    <td bgcolor="#E2E2E2" width="240">&nbsp;<b>Super Admin Space</b></td>
	<td bgcolor="#E2E2E2" width="150"><div align="center"><a href="add-office.php" class="headtext13">Add a User</a></div></td>
    <td bgcolor="#E2E2E2" width="10">|</td>
	
    <td bgcolor="#E2E2E2" width="125"><div align="center"><a href="add-new-officer.php" class="headtext13">Add a Manager</a></div></td>
    <td bgcolor="#E2E2E2" width="10">|</td>
	<td bgcolor="#E2E2E2" width="100"><div align="center"><a href="offices-list.php" class="headtext13">All Users Profiles</a></div></td>
    <td bgcolor="#E2E2E2" width="7">|</td>
    <td bgcolor="#E2E2E2" width="90"><div align="center"><a href="manager-list.php" class="headtext13">Managers</a> </div></td>
  </tr>
</tbody>
</table>
<?php 
}
?>
<table border="0" cellpadding="0" cellspacing="0" width="900">
  <tbody><tr style="height:25px;">
    <td bgcolor="#99CCFF" width="4">&nbsp;</td>
    <td bgcolor="#99CCFF" width="350">&nbsp;</td>
    <td bgcolor="#99CCFF" width="130"><div align="center"><a href="admin.php" class="headtext13"></a></div></td>
    <td bgcolor="#99CCFF" width="10"></td>
    <td bgcolor="#99CCFF" width="162"><div align="center"><a href="admin.php" class="headtext13">Home</a> </div></td>
    <td bgcolor="#99CCFF" width="7">|</td>
    <td bgcolor="#99CCFF" width="125"><div align="center"><a href="process.php?action=logOut" class="headtext13">Logout</a></div></td>
  </tr>
</table>