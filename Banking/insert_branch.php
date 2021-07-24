<!DOCTYPE html>
<html>
<body>

<?php
 
	$data = array($_POST['branch_name'],$_POST['branch_city'],$_POST['branch_code']) ;
		//echo $data[0]."   ".$data[1]."   ".$data[2];

	$user = 'root';
	$pass = '';
	$db = 'banking';

	$db_connect = new mysqli('localhost',$user,$pass,$db) or die('Unable to connect!');
	echo 'Connecting..'."<br>";
		
		$insert_q = " insert into branch (branch_name,branch_city,branch_code) VALUES ('$data[0]','$data[1]','$data[2]')" ;

		$res = $db_connect->query($insert_q) or die('bad query');
		
		echo"
				<script>
				alert('Branch Information Successfully Created. Press Ok to Submit Another one.');
				window.location.href='branch.php';
				</script>
			";
		

?>
</body>
</html>
