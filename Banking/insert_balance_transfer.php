<!DOCTYPE html>
<html>
<body>

<?php
 
	$data = array($_POST['account_number'],$_POST['account_password']) ;
		//echo $data[0]."   ".$data[1];


	$user = 'root';
	$pass = '';
	$db = 'banking';

	$db_connect = new mysqli('localhost',$user,$pass,$db) or die('Unable to connect');
	echo 'done'."<br>";
	
	$qry ="
				select account_password
				from account
				where account_number = '$data[0]'
	";

	$res = $db_connect->query($qry) or die('bad query');

    //$n=$res->num_rows ; 
	
	$row = $res->fetch_assoc();
	
    if($row['account_password']== $data[1])
    {    	echo"
				<script>
				alert('Press Ok To Go.');
				window.location.href='transfer.php?bre_id=$data[0]';
				</script>
			";

    }
	else{
		echo"
				<script>
				alert('ID or Password Not Match !');
				window.location.href='balance_transfer.php';
				</script>
			";
	}
?>
</body>
</html>