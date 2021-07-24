<?php
	

	$user = 'root';
	$pass = '';
	$db = 'banking';

	$db_connect = new mysqli('localhost',$user,$pass,$db) or die('Unable to connect!');
	$genderquery=mysqli_query($db_connect,"select gender from gender");
	$relationquery=mysqli_query($db_connect,"select nominee_relation from nominee_relation");

?>
<!Doc typer>
<html>
<head>

<link rel="stylesheet" href="design.css">

<title>Nominee</title>
<h2 class="h">Welcome to Nominee</h2>
</head>
<body id="b">
<div id="dnm">

<form action="insert_nominee.php" method="POST" align="center">
<center>
<img src="account.png" class="account_img"></img></center>
<br>
<b>
<label>Account-Number</label>
<input name="account_number" type="number" id="form" placeholder="Account Number" required></input>
<br>
<label>Nominee-Name</label>
<input name="nominee_name" type="text" id="form" placeholder="Nominee Name" required></input>
<br>

<label>Nominee-Gender</label>
<select name="nominee_gender" id="form">
<?php
while($row=mysqli_fetch_array($genderquery))
{
?>
	<option value="<?=$row["gender"];?>"><?=$row["gender"];?></option>
<?php
}

?>
</select>
<br>
<label>Nominee-Relation</label>
<select name="nominee_relation" id="form">
<?php
while($row=mysqli_fetch_array($relationquery))
{
?>
	<option value="<?=$row["nominee_relation"];?>"><?=$row["nominee_relation"];?></option>
<?php
}

?>
</select>
<br>
<label>Date-Of-Birth</label>
<input name="nominee_date_of_birth" type="date" id="form" placeholder="Date Of Birth" required></input>
<br>
<label>Nominee-NID</label>
<input name="nominee_nid" type="number" id="form" placeholder="Nominee NID" required></input>
<br>
</b>
<input name="Submit" type="submit" id="account_button" value="Submit Information"></input>
<a href="banker_login.php"><input name="Back" type="button" id="account_button" value="Back"></input>
</form>


</div>
</body>




</html>