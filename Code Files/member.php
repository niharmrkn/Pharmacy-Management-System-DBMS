<?php

session_start();

echo "welcome".@$_SESSION['username']."!<br><a href='logout.php' >  logout </a>";	

?>