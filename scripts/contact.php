<?php
	require_once("bdd.php");

	//le nombre de seconde minimum entre deux mails
	define(MIN_TIME, 30);
	define(MAIL, "micaoa@gmail.com");

	//ip de l'utilisateur
	$ip = $_SERVER['REMOTE_ADDR'];
	//var_dump($_SERVER);

	//si l'un des paramètre n'es pas défini
	if(!(isset($_GET["mail"]) AND isset($_GET["subject"]) AND isset($_GET["message"])))
		echo "mail, subjet ou message indéfini";
	else
	{
		if(checkDelai())
			send();
		else
			echo false;
	}

	//retourne vrai si le délai entre deux messages est suffisant (et faux si non)
	function checkDelai()
	{
		global $ip;
		//on récupère les éventuels message qui on été envoyés il y'a moins de 30 secondes avec cette ip..
		$query = "SELECT contact.* FROM contact WHERE ip = '$ip' AND NOW() - date <".MIN_TIME;
		$result = bdd()->query($query);

		//...retourne vrai s'il n'y en a pas
		return ($result->num_rows==0);
	}

	//envoi le message
	function send()
	{
		global $ip;
		$mail = $_GET["mail"];
		$subject = $_GET["subject"];
		$message = $_GET["message"];
		$query = "INSERT INTO contact VALUES ('$subject', '$message', now(), '$ip', '$mail');";
		mail(MAIL, "[new world]"+$subject, $message);
		bdd()->query($query);

		echo true;
	}
?>