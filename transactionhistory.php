<?php
 
	session_start();
	include 'connection.php';

	$q="select * from transactions";
	$result=mysqli_query($con,$q);
	$row_count=mysqli_num_rows($result);
	
?>
<html>
<head>
	<title>Transaction History</title>
	<style>
		table {
		font-family: sans-serif;
		border-collapse: collapse;
		width: 100%;

		}

		h1{
		font-family: serif;
		font-size:40px;
		}
		
		td, th {
		border: 2px solid black;
		text-align: center;
		padding: 8px;
		}
body {
background-color: #d9b3ff;
}
		
	</style>
</head>
<body>

	<div align="center" style="top:0px">		  			
		<table>
			<tr>
            <td style = "text-align:center;border:0px"> <a href="index.php" target="frame"><button class = "btn2"> Home </button></a></td>	 	
			<td style = "text-align:center;border:0px"><a href="customer.php" target="frame"><button class = "btn2">View Customers</button></a></td>
			<td style = "text-align:center;border:0px"><a href="transfermoney.php" target="frame"><button class = "btn2">Transfer Money</button></a></td>
			<td style = "text-align:center;border:0px"><a href="transactionhistory.php" target="frame"><button class = "btn2">View Transaction History</button></a></td>
			</tr>
		</table>
	</div>

    <h1 style="color:#1a0033;text-align: center;font-family: cursive;" >Transaction History</h1>
    <table>
	<tr>
		<th>SENDER NAME</th>
		<th>RECEIVER NAME</th>
		<th>AMOUNT</th>	
	</tr>
	<tbody>
		<tr align = center>
        <?php  
			while($row=mysqli_fetch_array($result)){
        ?>
	<td><?php echo  $row["sender"]; ?></td>
	<td><?php echo  $row["receiver"]; ?></td>
	<td><?php echo  $row["amount"]; ?></td>
	<tr align = center>
	<?php }
	?>
	</tr>
	</tbody>
	</table>
	
		
</body>
</html>