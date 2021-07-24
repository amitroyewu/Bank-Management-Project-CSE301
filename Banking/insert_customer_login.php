<!DOCTYPE html>
<html>
<head>
<?php
 
	$data = array($_POST['customer_id'],$_POST['customer_password']) ;
		//echo $data[0]."   ".$data[1];


	$user = 'root';
	$pass = '';
	$db = 'banking';

	$db_connect = new mysqli('localhost',$user,$pass,$db) or die('Unable to connect');
	echo ' '."<br>";
	
	$qry ="
				select account_password
				from account
				where customer_id = '$data[0]'
	";

	$res = $db_connect->query($qry) or die('bad query');

    //$n=$res->num_rows ; 
	
	$row = $res->fetch_assoc();
	
    if($row['account_password']== $data[1])
    {    	echo 'logged in';
			echo"
				<script>
				alert('Successfully Login.');
				window.location.href='customer_login.php';
				</script>
			";
			
    }
	else{
		echo"
				<script>
				alert('ID or Password Not Match !');
				window.location.href='customer_login.php';
				</script>
			";
	}
	
?>

</form>


</div>
</body>
</html>