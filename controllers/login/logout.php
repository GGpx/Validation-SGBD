<?php
// Fichier de logout session
	session_start();
	session_destroy();
	header('location: /');
