<?php

$username = 'root';

$passwd = 'abcd1234';

$dsn = 'mysql:host=localhost; dbname=register';



try {

	$db = new PDO($dsn, $username, $passwd);

	echo "Connected to the Database";


} catch (PDOException $ex) {

	echo "Connection failed".$ex->getMessage();
}

?>
