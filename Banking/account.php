<?php
	
	$_GET['re_id'];



	$user = 'root';
	$pass = '';
	$db = 'banking';

	$db_connect = new mysqli('localhost',$user,$pass,$db) or die('Unable to connect!');
	$branchquery=mysqli_query($db_connect,"select branch_name from branch");
	$accountquery=mysqli_query($db_connect,"select account_type from account_type");

?>
<!Doc typer>
<html>
<head>

<link rel="stylesheet" href="design.css">

<title>Account</title>
<h2 class="h">Welcome to Account</h2>
</head>
<body id="b">
<div id="d">

<form action="insert_account.php" method="POST" align="center">
<center>
<img src="account.png" class="account_img"></img></center>
<br>
<b>
<label>Account-Number</label>
<input name="account_number" type="number" id="form" placeholder="Account Number" required></input>
<br>
<label>Customer-ID</label>
<input name="customer_id" type="number" id="form" placeholder="Customer ID" required></input>
<br>
<label>Banker-ID</label>
<input name="banker_id" type="number" id="form" value="<?php echo $_GET['re_id'];?>" required></input>
<br>
<label>Account-Type</label>
<br>
<select name="account_type" id="form">
<?php
while($row=mysqli_fetch_array($accountquery))
{
?>
	<option value="<?=$row["account_type"];?>"><?=$row["account_type"];?></option>
<?php
}

?>
</select>
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
<label>Balance</label>
<input name="balance" type="number" id="form" placeholder="Opening Balance" required></input>
<br>
<label>Password</label>
<input name="account_password" type="password" id="form" placeholder="Password" required></input>
<br>
<label>Re-Type-Password</label>
<input name="account_re_type_password" type="password" id="form" placeholder="Re-Type Password" required></input>
</b>
<input name="Submit" type="submit" id="account_button" value="Submit Information"></input>
<a href="banker_login.php"><input name="Back" type="button" id="account_button" value="Back"></input>
</form>


</div>
</body>




</html>