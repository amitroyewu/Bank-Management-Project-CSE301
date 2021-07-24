<?php
?>
<!Doc typer>
<html>
<head>

<link rel="stylesheet" href="design.css">

<title>Deposit</title>
<h2 class="h">Welcome to Deposit</h2>
</head>
<body id="b">
<div id="depu">

<form action="insert_depositor.php" method="POST" align="center">
<center>
<img src="balance.png" class="account_img"></img></center>
<br>
<b>
<label>Account-Number</label>
<input name="account_number" type="number" id="form" placeholder="Receiver Account Number" required></input>
<br>
<label>Amount</label>
<input name="amount" type="number" id="form" placeholder="Amount" required></input>
<br>
<label>Depositor-Name</label>
<input name="depositor_name" type="text" id="form" placeholder="Depositor Name" required></input>
<br>
</b>
<input name="Submit" type="submit" id="account_button" value="Deposit"></input>
<a href="banker_page.php"><input name="Back" type="button" id="account_button" value="Back"></input>
</form>


</div>
</body>




</html>