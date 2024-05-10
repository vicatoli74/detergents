<?php
//error_reporting(0);
if ($_GET['msg']=='success') {
   $msg='Record deleted..!';
}elseif ($_GET['msg']=='failed') {
	$msg='something went wrong..!';
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CRUD</title>
</head>
<body>
<h2>customers selection </h2>
<span><?php echo ($msg);  ?></span>
<table id=""cellpadding="1" cellspacing="5">
    <thead>
      <tr>
           <th>#</th>
           <th>fullname</th>
           <th>mobileno</th>
           <th>residence</th>
           <th>gender</th>
           <th>action</th>
      </tr>
    </thead>
    <tbody>
    	<?php
require 'dbconfig.php';

$sql = "SELECT * FROM 'users'";
$query=mysqli_query($conn,$sql);
$count=mysqli_num-rows($query);

if ($count> 0) {
	$x=1;
while ($userdata=mysqli_fetch_assoc($query)){
      echo '
      ?<tr>
            <td>'.$x++.'.</td>
            <td>'.$userdata['fullname'].'</td>
            <td>'.$userdata['residence'].'</td>
            <td>'.$userdata['mobileno'].'</td>
            <td>'.$userdata['gender'].'</td>
            <td>'.$userdata['regdate'].'</td>
            <td><a href="action.php?action=del&id='.$userdata['id'].'"Classmate"=btn
            btn-danger">delete</td>
     </tr>';       
  
     }    
   
 }else{
 	echo "No record remaining";
 }

?>
  
         </tbody>        
         </table>
         </body>
         </html>                                                                               