<!DOCTYPE html>
<html>
<body>

<?php
 
	$data = array($_POST['admin_id'],$_POST['admin_password']) ;
		//echo $data[0]."   ".$data[1];


	$user = 'root';
	$pass = '';
	$db = 'banking';

	$db_connect = new mysqli('localhost',$user,$pass,$db) or die('Unable to connect');
	echo 'Connecting..'."<br>";
	
	$qry ="
				select admin_password
				from admin
				where admin_id = '$data[0]'
	";

	$res = $db_connect->query($qry) or die('bad query');

    //$n=$res->num_rows ; 
	
	$row = $res->fetch_assoc();
	
    if($row['admin_password']== $data[1])
    { 
		echo"
			<script>
			alert('Click OK to Connect');
			window.location.href='admin_page.php';
			</script>
		";

    }
	else{
		echo"
				<script>
				alert('ID or Password Not Match !');
				window.location.href='admin_login.php';
				</script>
			";
	}
	
?>
</body>
</html>