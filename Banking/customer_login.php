<?php


?>
<!Doc typer>
<html>
<head>

<link rel="stylesheet" href="design.css">

<title>Customer Login</title>
<h2 class="h">Welcome to Customer Login</h2>
</head>
<body id="b">
<div id="dc">

<form action="insert_customer_login.php" method="POST" align="center">
<center>
<img src="login.png" class="account_img"></img></center>
<br>
<b>
<label>Customer-ID</label>
<input name="customer_id" type="number" id="form" placeholder="Customer ID" required></input>
<br>
<label>Password</label>
<input name="customer_password" type="password" id="form" placeholder="Password" required></input>
</b>
<br>
<input name="customer_login" type="submit" id="customer_button" value="Login"></input>
<a href="home.php"><input name="Back" type="button" id="account_button" value="Back"></input>
</form>


</div>
</body>