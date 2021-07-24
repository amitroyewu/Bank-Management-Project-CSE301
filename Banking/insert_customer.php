<!DOCTYPE html>
<html>
<body>

<?php
 
	$data = array($_POST['customer_name'],$_POST['customer_id'],$_POST['email_id'],$_POST['gender'],$_POST['date_of_birth'],$_POST['nid'],$_POST['street'],$_POST['city'],$_POST['zip'] );
		//echo $data[0]."   ".$data[1]."   ".$data[2]."   ".$data[3]."   ".$data[4]."   ".$data[5]."   ".$data[6]."   ".$data[7]."   ".$data[8];

	$user = 'root';
	$pass = '';
	$db = 'banking';

	$db_connect = new mysqli('localhost',$user,$pass,$db) or die('Unable to connect!');
	echo 'Connecting..'."<br>";
	
		
		$insert_q = " insert into customer (customer_name,customer_id,email_id,gender,date_of_birth,nid,street,city,zip) VALUES ('$data[0]','$data[1]','$data[2]','$data[3]','$data[4]','$data[5]','$data[6]','$data[7]','$data[8]')" ;

		$res = $db_connect->query($insert_q) or die('bad query');
		
		echo"
				<script>
				alert('Customer Information Successfully Created. Press Ok to Submit Another one.');
				window.location.href='banker_login.php';
				</script>
			";
		

?>
</body>
</html>