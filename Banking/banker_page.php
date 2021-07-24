<?php


?>
<!Doc typer>
<html>
<head>

<link rel="stylesheet" href="design.css">

<title>Banker Home</title>
<h2 class="h">Welcome to Banker Home</h2>
</head>
<body id="b">
<div id="bpd">

<form action="home.php" method="POST" align="center">
<center>
<img src="home.png" class="account_img"></img></center>
<br>
<a href="banker_login.php"><input name="banker_login" type="button" id="account_button" value="Create Customer Account"></input>
<a href="nominee.php"><input name="banker_login" type="button" id="account_button" value="Add Nominee"></input>
<a href="debit_card.php"><input name="banker_login" type="button" id="account_button" value="Add Debit Card"></input>
<a href="credit_card.php"><input name="banker_login" type="button" id="account_button" value="Add Credit Card"></input>
<a href="depositor.php"><input name="banker_login" type="button" id="account_button" value="Depositor"></input>
<a href="banker_login.php"><input name="banker_login" type="button" id="account_button" value="Loan"></input>
<a href="home.php"><input name="Back" type="button" id="account_button" value="Back"></input>
</form>


</div>
</body>