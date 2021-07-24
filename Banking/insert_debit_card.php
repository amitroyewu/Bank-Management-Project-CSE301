<!DOCTYPE html>
<html>
<body>

<?php
 
	$data = array($_POST['account_number'],$_POST['debit_card_number'],$_POST['debit_card_password']);
		//echo $data[0]."   ".$data[1]."   ".$data[2];

	$user = 'root';
	$pass = '';
	$db = 'banking';

	$db_connect = new mysqli('localhost',$user,$pass,$db) or die('Unable to connect!');
	echo 'Connecting..'."<br>";
	
		$qry ="
				select account_number
				from account
				where account_number = '$data[0]'
	";

	$res = $db_connect->query($qry) or die('bad query');

    //$n=$res->num_rows ; 
	
	$row = $res->fetch_assoc();
	
    if($row['account_number']== $data[0])
    { 
		
		
		
		
		$insert_q = " insert into debit_card (account_number,debit_card_number, debit_card_password) VALUES ('$data[0]','$data[1]','$data[2]')" ;

		$res = $db_connect->query($insert_q) or die('bad query');
		
		echo"
				<script>
				alert('Debit Card Information Successfully Created. Press Ok to Submit Another one.');
				window.location.href='debit_card.php';
				</script>
			";
	}
	else{
		echo"
				<script>
				alert('Account Number Not Found !');
				window.location.href='debit_card.php';
				</script>
			";
	}	

?>
</body>
</html>