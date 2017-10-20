<?php
	require_once "bdd.php";

	if(isset($_REQUEST["email"]) && isset($_REQUEST["password"]))
	{
		$query = 'SELECT utilisateurs.* FROM utilisateurs INNER JOIN securite ON utilisateurs.idSecurite = securite.idSecurite WHERE utilisateurs.mail = "'.$_REQUEST["email"].'" and securite.mdp = "'.$_REQUEST["password"].'";';
		$results = bdd()->query($query);
		if($results->num_rows==0)
			echo "pas de résultats<br>";
		else
			$_SESSION["user"] = $results->fetch_assoc();
	}
	else
		if(isset($_REQUEST["out"]))
			unset($_SESSION["user"]);
		else
			echo "email et/ou password undefined";

	header("location: ../index.php");
?>