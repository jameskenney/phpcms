<?php
/**
 * Created by James Kenney.
 * User: James
 * Date: 4/25/2018
 * Time: 11:43 PM
 */

$db['db_host'] = "localhost";
$db['user'] = "james";
$db['pass'] = "";
$db['name'] = "phpcmsDB";

foreach ($db as $key => $value){
	define(strtoupper($key), $value);
}

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

//if ($connection) {
//	echo "Connected to the database";
//}