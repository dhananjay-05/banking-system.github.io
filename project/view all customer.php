<?php

include ('connection.php');

$query= "SELECT * from customer";

$result= mysqli_query($conn,$query);

?>
<!DOCTYPE html>
<html>

	<title>
	<head>fetch data from data base </head>
	</title>
<body>
<table align="center" border="1px" style=width:300px; line-height:40px;">
<tr>
<th colspan="4"> <h2>customer table</h2>
</th>
</tr>
<t>
<th>Name</th>
<th>Email</th>
<th>Current balance</th>
</t>
<?php
while($row=mysqli_fetch_assoc($result))
{
	?>
	<tr>
		
		<td><?php echo $row['name'];?></td>
		<td><?php echo $row['email'];?></td>
		<td><?php echo $row['current balance'];?></td>
	</tr>
	<?php

	}
?>





</table>

</body>
</html>



	
	

			
		

           
          

	



	








