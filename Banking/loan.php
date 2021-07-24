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

<title>Loan</title>
<h2 class="h">Welcome to Loan</h2>
<body id="b">
<div id="dln">

<form action="insert_loan.php" method="POST" align="center">
<center>
<img src="account.png" class="account_img"></img></center>
<br>
<b>
<label>Account-Number</label>
<input name="account_number" type="number" id="form" placeholder="Account Number" required></input>
<br>
<label>Loan-Number</label>
<input name="loan_number" type="number" id="form" placeholder="Loan Number" required></input>
<br>
<label>Branch-Name</label>
<br>
<select name="branch_name" id="form">
<?php
while($row=mysqli_fetch_array($branchquery))
{
?>
	<option value="<?=$row["branch_name"];?>"><?=$row["branch_name"];?></option>
<?php
}

?>
</select>
<br>
<label>amount</label>
<input name="amount" type="number" id="form" placeholder="Loan Amount" required></input>
<br>
</b>
<input name="Submit" type="submit" id="account_button" value="Submit Information"></input>
<a href="banker_page.php"><input name="Back" type="button" id="account_button" value="Back"></input>
</form>


</div>
</body>




</html>