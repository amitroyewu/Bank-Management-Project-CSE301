<!DOCTYPE html>
<html>
<body>

<?php
 
	$data = array($_POST['account_number'],$_POST['receiver_account_number'],$_POST['amount'],$_POST['account_password']) ;
		//echo $data[0]."   ".$data[1]."   ".$data[2]."   ".$data[3];


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
	
    if($row['account_password']== $data[3])
    {    	

			$aqry ="
				select account_number
				from account
				where account_number =  '$data[1]'
				";

		$ares = $db_connect->query($aqry) or die('bad query');

		//$n=$res->num_rows ; 
	
		$arow = $ares->fetch_assoc();

			
			if($data[1] == $arow['account_number']){
				$cutqry ="
				update account set balance = balance - '$data[2]' where account_number = '$data[0]'
				";
				$bres = $db_connect->query($cutqry) or die('bad query 2');
				$addqry ="
				update account set balance = balance + '$data[2]' where account_number = '$data[1]'
				";
				$cres = $db_connect->query($addqry) or die('bad query 3');
			}
			else{
				echo"
				<script>
				alert('No Account Found..');
				window.location.href='balance_transfer.php';
				</script>
			";
				
			}
			echo"
				<script>
				alert('Press Ok Make Another Transfer.');
				window.location.href='balance_transfer.php';
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