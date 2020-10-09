<?php

$user = "root";
$password ="";
$server ='localhost';
$db = 'record';
	  
 $conn = mysqli_connect( $server,$user,$password,$db);

if($conn){

	echo" connection successful";
}else {

	echo "no connection";}


$name=$_POST['username'];
$email=$_POST['email'];
$amount=$_POST['amount'];


$sql="INSERT INTO balance (transfer_from, transfer_to ,Amount) VALUES('$name','$email' ,'$amount')";

if(mysqli_query($conn,$sql))

	{echo " inserted";

}
else{echo " not inserted";
}


?>




	








