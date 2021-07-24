<!DOCTYPE html>
<html>
<body>

<?php
 
	$data = array($_POST['account_number'],$_POST['customer_id'],$_POST['banker_id'],$_POST['account_type'],$_POST['branch_name'],$_POST['balance'],$_POST['account_password'],$_POST['account_re_type_password']) ;
		//echo $data[0]."   ".$data[1]."   ".$data[2]."   ".$data[3]."   ".$data[4]."   ".$data[5]."   ".$data[6]."   ".$data[7];

	$user = 'root';
	$pass = '';
	$db = 'banking';

	$db_connect = new mysqli('localhost',$user,$pass,$db) or die('Unable to connect!');
	echo 'Connecting..'."<br>";
	
	if($data[6]==$data[7]){
		
		$insert_q = " insert into account (account_number,customer_id,banker_id,account_type,branch_name,balance,account_password) VALUES ('$data[0]','$data[1]','$data[2]','$data[3]','$data[4]','$data[5]','$data[6]')" ;

		$res = $db_connect->query($insert_q) or die('bad query');
		
		echo"
				<script>
				alert('Account Information Successfully Created. Press Ok to go Customer Information');
				window.location.href='customer.php?cre_id=$data[1]';
				</script>
			";
		
	}
		else{
			echo"
				<script>
				alert('Password & Re Type Password Not Match !');
				window.location.href='account.php';
				</script>
			";
			
		}

?>
</body>
</html>

