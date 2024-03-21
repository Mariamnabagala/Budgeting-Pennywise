<?php

	$connect = mysqli_connect('localhost', 'root', '', 'pennywise');
	if (!$connect) {
		die(mysqli_connect_error());
	}

?>