<?php

/* Déconnexion à L'Extranet */

	session_start();
	session_unset();
	session_destroy();
	header('Location: signin.php');
	exit();

?>