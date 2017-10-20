<?php
	session_start();
	if (isset($_GET["page"]))
		changePage($_GET["page"]);

	function changePage($page)
	{
		if($page!="reset")
			$_SESSION["currentPage"] = $page;
		else
			session_destroy();
		header("location: ../index.php");
	}

	 if (!isset($_SESSION["currentPage"]))
	 	$_SESSION["currentPage"] = "home.php";
?>