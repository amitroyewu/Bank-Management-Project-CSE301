<?php
	

?>
<!Doc typer>
<html>
<head>

<link rel="stylesheet" href="design.css">

<title>Credit Card</title>
<h2 class="h">Welcome to Credit Card</h2>
<body id="b">
<div id="dln">

<form action="insert_credit_card.php" method="POST" align="center">
<center>
<img src="account.png" class="account_img"></img></center>
<br>
<b>
<label>Account-Number</label>
<input name="account_number" type="number" id="form" placeholder="Account Number" required></input>
<br>
<label>Credit-Card-Number</label>
<input name="credit_card_number" type="number" id="form" placeholder="Credit Card Number" required></input>
<br>
<label>Password</label>
<input name="credit_card_password" type="password" id="form" placeholder="Password" required></input>
<br>
</b>
<input name="Submit" type="submit" id="account_button" value="Submit Information"></input>
<a href="banker_page.php"><input name="Back" type="button" id="account_button" value="Back"></input>
</form>


</div>
</body>




</html>