<?php

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
		  <li class='b'><a href='stockadj.php'>Back</a></li>
		</ul>

</body>
</html>


";

	echo "<h1>Insert..</h1>";
	

	@$submit = $_POST['submit'];
	@$pid = $_POST['pid'];
	@$pname = $_POST['pname'];
	@$ptype = $_POST['ptype'];
	@$mfgdate = $_POST['mfgdate'];
	@$expdate = $_POST['expdate'];
	@$quantity = $_POST['quantity'];
	@$pps = $_POST['pps'];
	@$date =date("Y-m-d");


	if($submit)
	{
		@$connect 	= mysqli_connect("localhost","root","","phplogin1") or die("couldn't connect!");
		@$namecheck = mysqli_query($connect,"SELECT PID FROM StockAdj WHERE PID='$pid'");
		@$count = mysqli_num_rows($namecheck);
		if ($count ==0) 
		{
			if($pid && $pname && $ptype && $mfgdate && $expdate && $quantity && $pps )
			{
					@$query = mysqli_query($connect,"
							INSERT INTO `StockAdj` (`PID`, `Pname`, `Ptype`, `Mfg_date`,`Exp_date`,`PPS`,`Quantity`,`Re_date`) VALUES ('$pid', '$pname', '$ptype', '$mfgdate','$expdate','$pps','$quantity','$date')
								");

					echo "<h3>you successfully enter a data</h3>";
			}
			else
			{
					die("fill all fields");
			}
		}

	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>InsertPage</title>
</head>
<body background="pharmacy5a.png">
	<br><br><br><br>
	<h3>
	<form action="Insert.php" method="POST">
			PID :&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
			<input type="number" name="pid">
			<br><br>
			Pname :&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
			<input type="text" name="pname">
			<br><br>
			Ptype :&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;
			<input type="text" name="ptype">
			<br><br>
			Mfg_date :&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
			<input type="date" name="mfgdate">
			<br><br>
			Exp_date :&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
			<input type="date" name="expdate">
			<br><br>
			Quantity :&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
			<input type="number" name="quantity">
			<br><br>
			PPS ( price per sample ) :
			<input type="number" name="pps">
			<br>
			<br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
			<input type="submit" name="submit">&emsp;&emsp;
			<button><a href="stockadj.php">Back</a></button>
	</form>
</h3>
</body>
</html>