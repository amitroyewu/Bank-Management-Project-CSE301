<html>
<head>

<link rel="stylesheet" href="design.css">

<title>Banker Login</title>
<h2 class="h">Login Again</h2>
</head>
<body id="b">
<div id="dc">

<form action="insert_banker_login.php" method="POST" align="center">
<center>
<img src="login.png" class="account_img"></img></center>
<br>
<b>
<label>Banker-ID</label>
<input name="banker_id" type="number" id="form" placeholder="Banker ID" required></input>
<br>
<label>Password</label>
<input name="banker_password" type="password" id="form" placeholder="Password" required></input>
</b>
<br>
<input name="banker_login" type="submit" id="account_button" value="Login"></input>
<a href="home.php"><input name="Back" type="button" id="account_button" value="Back"></input>
</form>


</div>
</body>