<?php
echo "
<html>
<body background='pharmacy5a.png'>
";
@$patname = $_POST['patname'];
@$phoneno = $_POST['phoneno'];

@$cpid = $_POST['cpid'];
@$qty1 = $_POST['qty1'];
@$add = $_POST['submit1'];

@$submit = $_POST['submit'];
@$connect = mysqli_connect("localhost","root","","phplogin1") or die("couldn't connect");

if($add)
{
	@$query = mysqli_query($connect,"INSERT INTO `buyer` (`PatientName`, `PID`, `Quantity1`,`Price`) VALUES ('$patname','$cpid','$qty1','')");

	@$query2 = mysqli_query($connect,"SELECT * FROM `stockadj` WHERE `PID`='$cpid'");

	while (@$row = mysqli_fetch_assoc(@$query2)) {
		@$dbquantity = $row['Quantity'];
	}
	@$dbquantity = $dbquantity - $qty1;
	@$query1 = mysqli_query($connect,"UPDATE `stockadj` SET `Quantity`='$dbquantity' WHERE `PID` ='$cpid' ");

	@$query3 = mysqli_query($connect,"SELECT * FROM `stockadj` WHERE `PID`='$cpid'");

	while (@$row = mysqli_fetch_assoc(@$query3)) {
		@$dbpps = $row['PPS'];
	}
	@$dbpps = $dbpps * $qty1;
	@$query1 = mysqli_query($connect,"UPDATE `buyer` SET `Price`='$dbpps' WHERE `PID` ='$cpid'");
	echo "Succesfully added .....please  go <a href='invoice.php'>back</a>";
}
if($submit)
{

	@$query4 = mysqli_query($connect,"SELECT * FROM `buyer`");
	echo "<h3><table>";
	echo "<tr>
			<td>
				PatientName
			</td>
			<td>
				PID
			</td>
			<td>
				Quantity
			</td>
			<td>
				Price
			</td>
	</tr>";
	while (@$row = mysqli_fetch_assoc(@$query4)) 
	{

		@$dbpatname = $row['PatientName'];
		@$dbcpid = $row['PID'];
		@$dbqty1 = $row['Quantity1'];
		@$dbprice = $row['Price'];
		echo "

		<tr>
			<td>
				$dbpatname
			</td>
			<td>
				$dbcpid
			</td>
			<td>
				$dbqty1
			</td>
			<td>
				$dbprice
			</td>
		</tr>

		";
	}
	echo "</table></h3>";
}
echo "</body>
</html>";
?>