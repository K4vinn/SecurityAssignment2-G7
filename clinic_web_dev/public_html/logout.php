<?php

	session_start();
	unset ($_SESSION['identifier']);
	session_destroy();
		
        echo "<script> alert('You have successfully logged out!');window.location= \"login.php\"; </script>";
        

?>