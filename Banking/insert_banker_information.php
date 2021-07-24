<!DOCTYPE html>
<html>
<body>

<?php
 
	$data = array($_POST['banker_id'],$_POST['banker_name'],$_POST['branch_name'],$_POST['banker_email'],$_POST['banker_password'],$_POST['banker_re_type_password']) ;
		//echo $data[0]."   ".$data[1]."   ".$data[2]."   ".$data[3]."   ".$data[4]."   ".$data[5];

	$user = 'root';
	$pass = '';
	$db = 'banking';

	$db_connect = new mysqli('localhost',$user,$pass,$db) or die('Unable to connect!');
	echo 'Connecting..'."<br>";
	
	if($data[4]==$data[5]){
		
		$insert_q = " insert into banker_information (banker_id,banker_name,branch_name,banker_email,banker_password) VALUES ('$data[0]','$data[1]','$data[2]','$data[3]','$data[4]')" ;

		$res = $db_connect->query($insert_q) or die('bad query');
		
		echo"
				<script>
				alert('Banker Information Successfully Created. Press Ok to Submit Another one.');
				window.location.href='banker_information.php';
				</script>
			";
		
		}
		else{
			echo"
				<script>
				alert('Password & Re Type Password Not Match !');
				window.location.href='banker_information.php';
				</script>
			";
			
		}

?>
</body>
</html>






