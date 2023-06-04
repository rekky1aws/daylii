<?php
/*$envFileName = NULL;

// Checking if .env.local exists
if (file_exists(PATH_PREFIX.'.env.local')) {
	$envFileName = ".env.local";
} else if (file_exists(PATH_PREFIX.'.env')) {
	echo "Warning : The use of file .env is not recommended. Please consider using .env.local to avoid pushing it to the repository\n\n";
	$envFileName = ".env";
}

// Reading environnement variables from .env
if (!is_null($envFileName)) {
	echo getcwd(); // debug
	$_ENV = parse_ini_file(PATH_PREFIX.$envFileName);
	var_dump($_ENV); // debug
} else {
	// die("ERROR : There is no .env file, please add one named .env.local following the template (that can be found .env.template)\n\n");
}*/

$_ENV = parse_ini_file(PATH_PREFIX.".env.local");
?>