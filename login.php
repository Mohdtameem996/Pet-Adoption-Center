<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

 	if($username=="Tameem" && $password=="Tameem")
	{
			header("Location: services.html");
	}
}
?>