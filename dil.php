<?php
	session_start();

	$dil=strip_tags($_GET["dil"]);
	$page=strip_tags($_GET["page"]);
	if ($dil=="tr" || $dil=="en"){
		$_SESSION["dil"]=$dil;
		header("Location: $page");
	}
	else{
			header("Location: $page");
	}
?>
