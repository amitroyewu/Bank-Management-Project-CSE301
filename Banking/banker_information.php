<?php

	$user = 'root';
	$pass = '';
	$db = 'banking';

	$db_connect = new mysqli('localhost',$user,$pass,$db) or die('Unable to connect!');
	$branchquery=mysqli_query($db_connect,"select branch_name from branch");

?>
<!Doc typer>
<html>
<head>

<link rel="stylesheet" href="design.css">

<title>Banker Information</title>
<h2 class="h">Welcome to Banker Information</h2>
</head>
<body id="b">
<div id="dd">

<form action="insert_banker_information.php" method="POST" align="center">
<center>
<img src="banker.png" class="account_img"></img></center>
<br>
<b>
<label>Banker-ID</label>
<input name="banker_id" type="number" id="form" placeholder="Banker ID" required></input>
<br>
<label>Banker-Name</label>
<input name="banker_name" type="text" id="form" placeholder="Name" required></input>
<br>
<label>Branch-Name</label>
<br>
<select name="branch_name" id="form">
<?php
while($row=mysqli_fetch_array($branchquery))
{
?>
	<option value="<?=$row["branch_name"];?>"><?=$row["branch_name"];?></option>
<?php
}

?>
</select>
<br>
<label>Banker-Email</label>
<input name="banker_email" type="email" id="form" placeholder="Email" required></input>
<br>
<label>Password</label>
<input name="banker_password" type="password" id="form" placeholder="Password" required></input>
<br>
<label>Re-Type-Password</label>
<input name="banker_re_type_password" type="password" id="form" placeholder="Re-Type Password" required></input>
<br>
</b><br>
<input name="Submit" type="submit" id="account_button" value="Submit Information"></input>
<a href="admin_page.php"><input name="Back" type="button" id="account_button" value="Back"></input>

</form>


</div>
</body>