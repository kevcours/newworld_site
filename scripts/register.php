<?php
	require_once "scripts/bdd.php";

	if(isset($_REQUEST["email"]) && isset($_REQUEST["password"]) && isset($_REQUEST["passwordConfirmation"]))
	{
		if($_REQUEST["password"] == isset($_REQUEST["passwordConfirmation"]))
		{
			$query = ""
		}
		else
		{
			echo "password != passwordConfirmation";
		}
	}

?>