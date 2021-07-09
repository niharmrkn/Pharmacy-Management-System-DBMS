<?php
echo "<html>
<body>";
@$submit = $_POST['submit'];
@$connect = mysqli_connect("localhost","root","","phplogin1") or die("couldn't connect");

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
echo "</body></html>
";
?>