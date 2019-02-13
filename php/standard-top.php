<?php

session_start();

if($_SESSION[$AUTH] != $AUTHRES) {
	msg("err", $MSG);
	header($HEAD);
	exit();
}






?>

