<!DOCTYPE html>
<html>
<body>

<?php
 
	$data = array($_POST['banker_id'],$_POST['banker_password']) ;
		//echo $data[0]."   ".$data[1];


	$user = 'root';
	$pass = '';
	$db = 'banking';

	$db_connect = new mysqli('localhost',$user,$pass,$db) or die('Unable to connect');
	echo 'done'."<br>";
	
	$qry ="
				select banker_password
				from banker_information
				where banker_id = '$data[0]'
	";

	$res = $db_connect->query($qry) or die('bad query');

    //$n=$res->num_rows ; 
	
	$row = $res->fetch_assoc();
	
    if($row['banker_password']== $data[1])
    {    	echo"
				<script>
				alert('Press Ok To Go.');
				window.location.href='account.php?re_id=$data[0]';
				</script>
			";

    }
	else{
		echo"
				<script>
				alert('ID or Password Not Match !');
				window.location.href='banker_login.php';
				</script>
			";
	}
?>
</body>
</html>