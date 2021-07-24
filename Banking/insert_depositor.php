<!DOCTYPE html>
<html>
<body>

<?php
 
	 $data = array($_POST['account_number'],$_POST['amount'],$_POST['depositor_name']);
		//echo $data[0]."   ".$data[1]."   ".$data[2];


	$user = 'root';
	$pass = '';
	$db = 'banking';

	$db_connect = new mysqli('localhost',$user,$pass,$db) or die('Unable to connect');
	echo 'done'."<br>";
	
		$insert_q = " insert into depositor (account_number,amount,depositor_name) VALUES ('$data[0]','$data[1]','$data[2]')" ;
		$res = $db_connect->query($insert_q) or die('Depositor Information Not Update in Database');
			$aqry ="
				select account_number
				from account
				where account_number =  '$data[0]'
				";

		$ares = $db_connect->query($aqry) or die('bad query');

		//$n=$res->num_rows ; 
	
		$arow = $ares->fetch_assoc();

			
			if($data[0] == $arow['account_number']){
				$addqry ="
				update account set balance = balance + '$data[1]' where account_number = '$data[0]'
				";
				$cres = $db_connect->query($addqry) or die('bad query');
				
			}
			else{
				echo"
				<script>
				alert('No Account Found..');
				window.location.href='depositor.php';
				</script>
			";
				
			}
			echo"
				<script>
				alert('Deposit Successfully. Press Ok Make Another Deposit.');
				window.location.href='depositor.php';
				</script>
			";

?>
</body>
</html>