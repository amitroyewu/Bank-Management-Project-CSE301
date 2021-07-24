<?php
	
	$_GET['cre_id'];

	$user = 'root';
	$pass = '';
	$db = 'banking';

	$db_connect = new mysqli('localhost',$user,$pass,$db) or die('Unable to connect!');
	$genderquery=mysqli_query($db_connect,"select gender from gender");

?>
<!Doc typer>
<html>
<head>

<link rel="stylesheet" href="design.css">

<title>Customer</title>
<h2 class="h">Welcome to Customer</h2>
</head>
<body id="b">
<div id="dcu">

<form action="insert_customer.php" method="POST" align="center">
<center>
<img src="account.png" class="account_img"></img></center>
<br>
<b>
<label>Customer-Name</label>
<input name="customer_name" type="text" id="form" placeholder="Customer Name" required></input>
<br>
<label>Customer-ID</label>
<input name="customer_id" type="number" id="form" value="<?php echo $_GET['cre_id'];?>" required></input>
<br>
<label>Email-ID</label>
<input name="email_id" type="email" id="form" placeholder="Email ID" required></input>
<br>
<label>Gender</label>
<br>
<select name="gender" id="form">
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
<label>Date-Of-Birth</label>
<input name="date_of_birth" type="date" id="form" placeholder="Date Of Birth" required></input>
<br>
<label>NID</label>
<input name="nid" type="number" id="form" placeholder="NID" required></input>
<br>
<label>Streeet</label>
<input name="street" type="text" id="form" placeholder="Street" required></input>
<br>
<label>City</label>
<input name="city" type="text" id="form" placeholder="City" required></input>
<br>
<label>Zip</label>
<input name="zip" type="number" id="form" placeholder="Zip" required></input>
</b>
<input name="Submit" type="submit" id="account_button" value="Submit Information"></input>
<a href="banker_login.php"><input name="Back" type="button" id="account_button" value="Back"></input>
</form>


</div>
</body>




</html>