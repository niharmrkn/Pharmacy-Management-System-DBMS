<!DOCTYPE html>
<html>
	<title>2nd page</title>
	<link rel="stylesheet" type="text/css" href="login2css.css">
<?php

session_start();

@$submit = $_POST['submit'];
@$username = $_POST['username'];
@$password = $_POST['password'];

if($submit)
{

if( @$username && @$password)
{

	@$connect 	= mysqli_connect("localhost","root","","phplogin1") or die("couldn't connect!");	
	@$query     = mysqli_query($connect,"SELECT * FROM users1 WHERE Username='$username'");
	@$numrows = mysqli_num_rows($query);
	
	if(@$numrows != 0)
	{
		while (@$row = mysqli_fetch_assoc(@$query)) {
			@$dbusername = $row['Username'];
			@$dbpassword = $row['Password'];
		}
		if (@$dbusername==@$username && @$dbpassword==@$password) {	

			$_SESSION['username']=$dbusername;
		}
		else
			echo "incorrect";
	}
	else
	{
		echo "the user doesn't exist <button><a href='login1.php'>Back</a></button>";
	
	die();
	}	

}
else

	die("please enter a username and password");
	
}
?>
<body background="pharmacy5.png">
	<br><br><br><br><br><br>
		<ul>
		  <li><a href="stockadj.php">Stock Adjustment</a></li>
		  <li><a href="Invoice.php">Invoice</a></li>
		  <li><a href="contact.php">Contact</a></li>
		  <li><a href="#about">About</a></li>
		  <li class="b"><a href="login1.php">logout</a></li>
		</ul>

	
</body>
</html>