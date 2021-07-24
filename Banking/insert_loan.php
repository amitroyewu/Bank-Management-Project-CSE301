<!DOCTYPE html>
<html>
<body>

<?php
 
	$data = array($_POST['account_number'],$_POST['loan_number'],$_POST['branch_name'],$_POST['amount']);
		//echo $data[0]."   ".$data[1]."   ".$data[2]."   ".$data[3];

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
		
		
		
		
		$insert_q = " insert into loan (account_number,loan_number,branch_name,amount) VALUES ('$data[0]','$data[1]','$data[2]','$data[3]')" ;

		$res = $db_connect->query($insert_q) or die('bad query');
		
		echo"
				<script>
				alert('Loan Information Successfully Created. Press Ok to Submit Another one.');
				window.location.href='loan.php';
				</script>
			";
	}
	else{
		echo"
				<script>
				alert('Account Number Not Found !');
				window.location.href='loan.php';
				</script>
			";
	}	

?>
</body>
</html>