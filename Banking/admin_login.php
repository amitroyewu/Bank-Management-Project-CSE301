<html>
<head>

<link rel="stylesheet" href="design.css">

<title>Admin Login</title>
<h2 class="h">Welcome to Admin Login</h2>
</head>
<body id="b">
<div id="dc">

<form action="insert_admin_login.php" method="POST" align="center">
<center>
<img src="login.png" class="account_img"></img></center>
<br>
<b>
<label>Admin-ID</label>
<input name="admin_id" type="number" id="form" placeholder="Banker ID" required></input>
<br>
<label>Password</label>
<input name="admin_password" type="password" id="form" placeholder="Password" required></input>
</b>
<br>
<input name="admin_login" type="submit" id="account_button" value="Login"></input>
<a href="home.php"><input name="Back" type="button" id="account_button" value="Back"></input>
</form>


</div>
</body>