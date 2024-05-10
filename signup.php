<?php
if (isset($_SESSION['variable'])) {
}
// $msg =Null;
//require database connection
include 'dbconfig.php';
if (isset($_POST['submit'])) {
	//submitted user data
	$fullname =$_POST['fullname'];
	$mobileno= $_POST['mobileno'];
	$residence=$_POST['residence'];
	$gender=$_POST['gender'];

	//check if all fields are entered
	if(empty($fullname) || empty($mobileno) || empty($gender)) {

        echo "Please fill in all fields.";
    } else{

    	//insert into database
	$sql="INSERT INTO `tbl_users`(`fullname`, `mobileno`, `residence`, `gender`) VALUES ('$fullname','$mobileno','$residence',	'$gender')";
	$query = mysqli_query($conn,$sql);

	if ($query == true) {
	     $msg="you have registred successfully";
	header('location:page3.php');
	exit();
	
	}else{

		$msg="something went wrong";
	}
}
}

?>



<!DOCTYPE html>
<html>
<head>
<header id="signup">


</header>
<style>
	body{
		background-color: #E5D8EB;
		text-align: center;
	}
	#button{
		text-align:20px;
		border-radius: 200px;
		background-color: white;
		border-left: 250px;
		border-right: 250px;
		 width:260px;
		height:45px ;
		border-top: 250px;
		border-bottom: 250px;
		margin-right:10px;
		margin-top: 40px;
		font-size:20px ;
		border-radius:10px ;


	}
	#button1{ text-align: none;
		border-radius: 200px;
		background-color: #A922E9;
		border-left: 250px;
		border-right: 250px;
		 width:260px;
		 height:45px ;
		 border-top: 250px;
		 border-bottom: 250px;
		 margin-left 20px;
		 margin-top: 80px;
		 font-size: 20px;
	}
	.mobile{
		width: 35%;
		height: 35px;
		margin-top: 5%;
	}
	.btn{
		width: 5%;
		height: 5%;
		border-radius: 7%;
		color: black;
		margin-top: 5%;
	}
</style>
 <body>
<form action="" method="post">

       <div class="msg"> <?php if (isset($msg)){  
       	print($msg);
       }?>
       </div>
       	
	<div>
		<input type="text" name="fullname" placeholder="fullname" class="mobile">

	</div>
	<div>
   <input input type="tel" name="mobileno" placeholder="+254" maxlength="13"required class="mobile">
</div>
   <br>
   
   <div>
<input type="text" name="residence"maxlength="15" placeholder="residence"required class="mobile">
 </div>
<br>
<input type="text" name="gender" placeholder="gender"  maxlength="6" required confirm class="mobile">
<div>
  <input type="submit" name="submit" value="confirm" class="btn">
   </div>

<br>
	By Registering, you agree to our <br>terms and services and also confirm that you are atleast 18 years old.
</body>
</html>