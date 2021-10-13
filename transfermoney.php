<?php 
	session_start();
	include 'connection.php';

	$q="select * from customers";
	$result=mysqli_query($con,$q);
	$row_count=mysqli_num_rows($result);
?>

<html>
<head>
	<title>Customer Details</title>
	
	<style>
		table {
		font-family: sans-serif;
		border-collapse: collapse;
		width: 100%;
		}

		h2{
		font-family: monospace; 
		font-size:30px;
		}
		
		td, th {
		border: 1px solid black;
		text-align: center;
		padding: 8px;
		}

		tr:nth-child(odd) {
		background-color:#00b3b3 ;
		}
	</style>
</head>
<body style="background-color:	#ff9999;">

	<div align="center" style="top:0px">		  			
		<table width="1316" align="center" class = "t">
			<tr>
            <td style = "text-align:center;border:0px"> <a href="index.php" target="frame"><button class = "btn2"> Home </button></a></td>	 	
			<td style = "text-align:center;border:0px"><a href="customer.php" target="frame"><button class = "btn2">View Customers</button></a></td>
			<td style = "text-align:center;border:0px"><a href="Transfermoney.php" target="frame"><button class = "btn2">Transfer Money</button></a></td>
			<td style = "text-align:center;border:0px"><a href="transactionhistory.php" target="frame"><button class = "btn2">View Transaction History</button></a></td>
            </tr>
        </table>
	</div>
    <h2 style="color: #4d0019;text-align: center;font-family: cursive;" >To transfer money from one user to another , click on the user's name </h2>
    <table class="flat-table flat-table-1" align=center style="font-family: serif;color: black;font-weight: bold;">
	<thead>
		
		<th>NAME</th>
		<th>EMAIL</th>
<th>CUSTOMER phone.NO</th>
		<th>BALANCE</th>
	</thead>
	<tbody>
		<tr align = center>
        
		<?php  
			while($row=mysqli_fetch_array($result)){
         ?>
<?php echo "<td> <a href = 'transact.php?name=$row[0]'>$row[0]</a></td>";?>
		 
		
		<td><?php echo  $row["email"]; ?></td>

			<td><?php echo  $row["phoneno"]; ?></td>
		<td><?php echo  $row["balance"]; ?></td>
		<tr align = center>
		
		<?php }
		?>
		
		</tr>

        
	</tbody>
	</table>
	<br><br>
	
    
</body>
</html>