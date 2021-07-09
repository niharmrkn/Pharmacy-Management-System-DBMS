<?php
echo "<br><br><br><br><br><br><br><br><br>";
echo "<h1 align='center'>Register..</h1>";

@$submit = $_POST['submit'];
@$fullname = strip_tags($_POST['fullname']);
@$username = strip_tags($_POST['username']);
@$password = strip_tags($_POST['password']);
@$confirmpassword = strip_tags($_POST['cpassword']);
@$date = date("Y-m-d");

if($submit)
{
	@$connect = mysqli_connect("localhost","root","","phplogin1");
	@$namecheck = mysqli_query($connect,"SELECT username FROM users1 WHERE Username='$username'");
	@$count = mysqli_num_rows($namecheck);
	if ($count !=0) {
		echo "you already Registered !";	
		echo "<br>";
		echo "<a href='login1.php'>click here</a>";
		die();
	}
	else
	{
	if ($fullname && $username && $password && $confirmpassword)
	{

		if($password == $confirmpassword)
		{
			if(strlen($fullname)>25||strlen($username)>25)
			{
				echo "fullname and username length is too much ";
			}
			else
			{
				if (strlen($password)>25||strlen($password)<6) 
				{
					echo "password must bein between 6 and 25 length ";
				}
				else
				{
					/*@$password = md5($password_hash(string, PASSWORD_DEFAULT)d);
					@$confirmpassword=md5($cpassword);*/
					@$query = mysqli_query($connect,"
							INSERT INTO `users1` (`Name`, `Username`, `Password`, `date`) VALUES ('$fullname', '$username', '$password', '$date')
								");

					echo "You have been successfully registered";
					

				}
			}
		}
		else
		{
			echo "password doesn't match";
		}
	}
	else
	{
		die("Enter all fields");
	}
	}	

}


?>
<html>
	<form action="register.php" method="POST">
		
		<table align="center">
			<tr>
				<td>
					<h3>
					Full Name:
				</td>
				<td>
					<h3>
					<input type="text" name="fullname">
				</td>
			</tr>
			<tr>
				<td><h3>
					Enter a username:
				</td>
				<td><h3>
					<input type="text" name="username">
				</td>
			</tr>
			<tr>
				<td><h3>
					enter password:
				</td>
				<td><h3>
					<input type="password" name="password">
				</td>
			</tr>
			<tr>
				<td><h3>
					confirm password:
				</td>
				<td><h3>
					<input type="password" name="cpassword">
				</td>
			</tr>
		</table>
			<h3 align="center"><input type="submit" name="submit" value="Register"></h3>
			<h3 align="center"><a href="login1.php">Back</a></h3>
	</form>
	<body background="pharmacy3a.png"></body>
</html>