<?php
	
	$_GET['bre_id'];
?>
<!Doc typer>
<html>
<head>

<link rel="stylesheet" href="design.css">

<title>Customer</title>
<h2 class="h">Welcome to Customer</h2>
</head>
<body id="b">
<div id="dtr">

<form action="insert_transfer.php" method="POST" align="center">
<center>
<img src="balance.png" class="account_img"></img></center>
<br>
<b>
<label>Account-Number</label>
<input name="account_number" type="number" id="form" value="<?php echo $_GET['bre_id'];?>" required></input>
<br>
<label>Receiver-Account-Number</label>
<input name="receiver_account_number" type="number" id="form" placeholder="Receiver Account Number" required></input>
<br>
<label>Amount</label>
<input name="amount" type="number" id="form" placeholder="Amount" required></input>
<br>
<label>Password</label>
<input name="account_password" type="password" id="form" placeholder="Password" required></input>
</b>
</b>
<input name="Submit" type="submit" id="account_button" value="Submit Information"></input>
<a href="banker_login.php"><input name="Back" type="button" id="account_button" value="Back"></input>
</form>


</div>
</body>




</html>