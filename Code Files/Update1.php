<?php

echo "<html>
<body background='pharmacy5a.png'>

</body>
</html>";
	@$connect 	= mysqli_connect("localhost","root","","phplogin1") or die("couldn't connect!");
	@$sname = $_POST['sname'];
	@$pname1 = $_POST['tochange'];
	@$ptype1 = $_POST['ptype1'];
	@$mdate1 = $_POST['mdate1'];
	@$edate1 = $_POST['edate1'];
	@$pps1 = $_POST['pps1'];
	@$quan1 = $_POST['quan1'];

	if($sname && $pname1)
	{
		$change = mysqli_query($connect , "UPDATE `stockadj` SET `Pname`= '$pname1' WHERE `PID` ='$sname' ");
		echo "Successfully updated..";
		echo "<button><a href='stockadj.php'>Back</a></button>";

	}
	if($sname && $ptype1)
	{
		$change = mysqli_query($connect , "UPDATE `stockadj` SET `Ptype`='$ptype1'WHERE `PID` ='$sname' ");echo "Successfully updated..";
echo "<button><a href='stockadj.php'>Back</a></button>";
	}
	if($sname && $mdate1)
	{
		$change = mysqli_query($connect , "UPDATE `stockadj` SET `Mfg_Date`='$mdate1' WHERE `PID` ='$sname' ");
		echo "Successfully updated..";
	echo "<button><a href='stockadj.php'>Back</a></button>";
	}
	if($sname && $edate1)
	{
		$change = mysqli_query($connect , "UPDATE `stockadj` SET `Exp_Date`='$edate1'WHERE `PID` ='$sname' ");
		echo "Successfully updated..";
	echo "<button><a href='stockadj.php'>Back</a></button>";
	}
	if($sname && $pps1)
	{
		$change = mysqli_query($connect , "UPDATE `stockadj` SET `PPS`='$pps1'WHERE `PID` ='$sname' ");
		echo "Successfully updated..";
	echo "<button><a href='stockadj.php'>Back</a></button>";
	}
	if($sname && $quan1)
	{
		$change = mysqli_query($connect , "UPDATE `stockadj` SET `Quantity`='$quan1' WHERE `PID` ='$sname' ");
		echo "Successfully updated..";
	echo "<button><a href='stockadj.php'>Back</a></button>";
	}

?>