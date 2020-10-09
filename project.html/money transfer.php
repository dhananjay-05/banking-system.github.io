<?php

include ('connection.php');

$query= "SELECT * from balance";

$result= mysqli_query($conn,$query);

?>
<!DOCTYPE html>
<html>

	<title>
	<head>fetch data from data base </head>
	</title>
<body>
<table align="center" border="1px" style=width:600px; line-height:50px;">
<tr>
<th colspan="4"> <h2>Transfer table</h2>
</th>
</tr>
<t>
<th>transfer from</th>
<th>transfer to</th>
<th>Amount</th>
</t>
<?php
while($row=mysqli_fetch_assoc($result))
{
	?>
	<tr>
		
		<td><?php echo $row['transfer_from'];?></td>
		<td><?php echo $row['transfer_to'];?></td>
			<td><?php echo $row['Amount'];?></td>
	</tr>
	<?php

	}
?>





</table>
</body>
</html>

