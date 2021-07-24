<!DOCTYPE html>
<html>
<body>

<?php
 
	$data = array($_POST['account_number'],$_POST['nominee_name'],$_POST['nominee_gender'],$_POST['nominee_relation'],$_POST['nominee_date_of_birth'],$_POST['nominee_nid'] );
		//echo $data[0]."   ".$data[1]."   ".$data[2]."   ".$data[3]."   ".$data[4]."   ".$data[5];

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
		
		
		
		
		$insert_q = " insert into nominee (account_number,nominee_name,nominee_gender,nominee_relation,nominee_date_of_birth,nominee_nid) VALUES ('$data[0]','$data[1]','$data[2]','$data[3]','$data[4]','$data[5]')" ;

		$res = $db_connect->query($insert_q) or die('bad query');
		
		echo"
				<script>
				alert('Customer Information Successfully Created. Press Ok to Submit Another one.');
				window.location.href='nominee.php';
				</script>
			";
	}
	else{
		echo"
				<script>
				alert('Account Number Not Found !');
				window.location.href='nominee.php';
				</script>
			";
	}	

?>
</body>
</html>