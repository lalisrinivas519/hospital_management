<?php

 $con=mysqli_connect("localhost", "root", "", "hospital_management");

if (mysqli_connect_error()) {
	echo "Connection Error.";
} else {
	echo "Database Connection Successfully.";
}
?>
