<?php

session_start();

echo "<h1>Welcome  , ".@$_SESSION['username']."</h1>";
@$connect 	= mysqli_connect("localhost","root","","phplogin1") or die("couldn't connect!");
echo "
<html>	
<head>
	<title>Stock Adjustment</title>
	<link rel='stylesheet' type='text/css' href='stockadjcss.css'>
</head>
<body background='pharmacy5.png'>
	<br><br><br><br><br><br>
		<ul>
		  <li><a href='Insert.php'>Insert</a></li>
		  <li><a href='Update.php'>Update</a></li>
		  <li><a href='Delete.php'>Delete</a></li>
		  <li class='b'><a href='login2.php'>Back</a></li>
		</ul>

</body>
</html>


";
@$query1     = mysqli_query($connect,"SELECT * FROM StockAdj");

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
	while (@$row = mysqli_fetch_assoc(@$query1)) 
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
?>

