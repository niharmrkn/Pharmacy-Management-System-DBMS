<?php

	@$connect 	= mysqli_connect("localhost","root","","phplogin1") or die("couldn't connect!");
	@$dname = $_POST['dname'];

	$delete = mysqli_query($connect,"DELETE FROM StockAdj WHERE PID='$dname'");
	echo "Successfully Deleted .......";
	echo "
	<html>
		<body background='pharmacy5a.png'>
		<button><a href='stockadj.php'>Back</a></button>
		</body>
	</html>

	";
?>