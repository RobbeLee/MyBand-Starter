<?php

function dbConnect()
{
    $config = require __DIR__ . "/config.php";
    try {
        $dsn = 'mysql:host=' . $config['DB_HOST'] . ';dbname=' . $config['DB_NAME'];

        $connection = new PDO($dsn, $config['DB_USER'], $config['DB_PASSWORD']);

        return $connection;

    } catch (\PDOException $e) {
        echo 'Connectie is kaput: ' . $e->getMessage();
    }

}
/**
 * Geeft de juiste URL terug voor het opgegeven path
 * Bijvoorbeeld voor de homepage: echo url('/');
 *
 * @param $path
 *
 * @return string
 */
function url( $path ) {
	global $CONFIG;
	return $CONFIG['BASE_URL'] . $path;
}
/**
 * Hier maken we de template engine aan, we geven de template engine het pad naar onze views (templates)
 * @return \League\Plates\Engine
 */
function get_template_engine() {
	global $CONFIG;
	$templates_path  = $CONFIG['PRIVATE'] . '/views';
	$template_engine = new League\Plates\Engine( $templates_path );
	return $template_engine;
}