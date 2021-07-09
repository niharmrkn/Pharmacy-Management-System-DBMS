</<!DOCTYPE html>
<html>
<head>
	<title>Invoice</title>
	<link rel="stylesheet" type="text/css" href="invoice.css">
</head>

<body background="pharmacy5.png">
	<br><br><br><br><br><br>
		<ul>
		  <li><a href="stockadj.php">Stock Adjustment</a></li>
		  <li><a href="Invoice.php">Invoice</a></li>
		  <li><a href="contact.php">Contact</a></li>
		  <li><a href="#about">About</a></li>
		  
		  <li class="b"><a href="login2.php">Back</a></li>
		</ul>

	

</body>
</html>
<?php


@$connect = mysqli_connect("localhost","root","","phplogin1") or die("couldn't connect");
@$qty=$_POST['qty'];
			
@$query2     = mysqli_query($connect,"SELECT * FROM StockAdj");
	echo "<h3><table>";
	echo "<tr>
			<td>
				PID
			</td>
			<td>
				Pname
			</td>
			<td>
				Ptype
			</td>
			<td>
				Mfg_date
			</td>
			<td>
				Exp_Date
			</td>
			<td>
				PPS
			</td>
			<td>
				Quantity
			</td>
			<td>
				Re_Date
			</td>
	</tr>";
	while (@$row = mysqli_fetch_assoc(@$query2)) 
	{

		@$dbpid = $row['PID'];
		@$dbpname = $row['Pname'];
		@$dbptype = $row['Ptype'];
		@$dbmfgdate = $row['Mfg_Date'];
		@$dbexpdate = $row['Exp_Date'];
		@$dbpps = $row['PPS'];
		@$dbquantity = $row['Quantity'];
		@$dbredate = $row['Re_Date'];
		echo "

		<tr>
			<td>
				$dbpid
			</td>
			<td>
				$dbpname
			</td>
			<td>
				$dbptype
			</td>
			<td>
				$dbmfgdate
			</td>
			<td>
				$dbexpdate
			</td>
			<td>
				$dbpps
			</td>
			<td>
				$dbquantity
			</td>
			<td>
				$dbredate
			</td>

		</tr>

		";
	}
	echo "</table></h3>";

echo "

	<form action='Invoice.php' method='POST'>
		<h3>
			<br><br>		
			How many products you want to buy ? :&emsp;&emsp;
			<input type='number' name='qty'>
			<br><br>
			<input type='submit' name='submit2' value='go'>
			<br><br>			

		</h3>
	</form>

";
@$go = $_POST['submit2'];
if($go)
{
		for ($i=1; $i <= $qty ; $i++) 
		{
		echo "

			<form action='Invoice1.php' method='POST'>
				<h3>
					<br><br>
					Patient's Name :&emsp;&emsp;
					<input type='text' name='patname'>
					<br><br>		
					Enter the PID of Product :&emsp;&emsp;
					<input type='number' name='cpid'>
					<br><br>
					Enter the qty :&emsp;&emsp;
					<input type='number' name='qty1'>
					<br><br>
					<input type='submit' name='submit1' value='ADD'>
					<br><br>			
				</h3>
			</form>

		";		
		}
}
echo "

	<form action='Invoice1.php' method='POST'>
		<h3>
			<br><br>
			<input type='submit' name='submit' value='All Records'>
		</h3>
	</form>

";		


?>

