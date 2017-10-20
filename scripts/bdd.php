<?php
function bdd()
{
	$user = "mvanlerberghe";
	$password = "ini01";
	$host = "localhost";
	$base = "nw";

	if($cnx = mysqli_connect($host, $user, $password, $base))
		return $cnx;
	else
		echo $cnx.error();
}
?>