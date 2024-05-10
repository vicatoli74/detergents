<?php
<!-- 
Data being collected 
Mobile No
Fullname
IDNo
Email
Password
Verification Code
Pin Location
Residence
Profile

$appName = "detergents";
//require 'api/sms/v1/bulksms.php';
//require 'api/random.php';
// Steps:
// 1. Connecting to the database
// 2. Obtain user sent data and process
// 3. Save to database

date_default_timezone_set('Africa/Nairobi');
//db details
$server = 'localhost';
$dbUser = 'root';
$dbPass = '';
$dbName = 'gasapp';

//Connect and select the database
$conn = new mysqli($server, $dbUser, $dbPass, $dbName);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else{
	//echo "Connection established";
}


// Step 2: Capture sent data

if (isset($_POST['send'])) {
	$userMobile = $_POST['usermobile'];

	$status = 'inactive';
	$regDate = date('d-m-Y H:i:s');

	//Step 3: Store records in the DB

	$sql= "INSERT INTO tbl_users (mobileno, regtime, regstatus) VALUES ('$userMobile', '$regDate', '$status')";
	$query = mysqli_query($conn,$sql);
	if ($query == true) {
		//$to = $userMobile;
		//$code = GenerateKey(4);
		//$msg = $appName." verification Code: ".$code;
		//sendSms($to,$msg);
		echo "Registered";
	}else{
		echo "Something went wrong!";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>detergents/signup</title>
</head>
<style type="text/css">
	{
	<form action="" method="post">
		<input type="tel" name="usermobile" placeholder="Mobile No">
		<input type="submit" name="send" value="Sign Up">
	</form>
</body>
</html>


?>