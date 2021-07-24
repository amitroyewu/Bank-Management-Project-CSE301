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

<title>Branch</title>
<h2 class="h">Welcome to Branch</h2>
</head>
<body id="b">
<div id="dbr">

<form action="insert_branch.php" method="POST" align="center">
<center>
<img src="branch.png" class="account_img"></img></center>
<br>
<b>
<label>Branch-Name</label>
<input name="branch_name" type="text" id="form" placeholder="Branch-Name" required></input>
<br>
<label>Branch-City</label>
<input name="branch_city" type="text" id="form" placeholder="Branch-City" required></input>
<br>
<label>Branch-Code</label>
<input name="branch_code" type="number" id="form" placeholder="Branch-Code" required></input>
<br>
</b>
<input name="Submit" type="submit" id="account_button" value="Submit Information"></input>
<a href="admin_page.php"><input name="Back" type="button" id="account_button" value="Back"></input>
</form>


</div>
</body>




</html>