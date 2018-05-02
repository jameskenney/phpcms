<?php
/**
 * Created by James Kenney.
 * User: James
 * Date: 3/24/2018
 * Time: 8:04 PM
 */

//require_once( __DIR__ . '/../vendor/autoload.php' );

$db = new PDO('mysql:dbname=phpcmsDB;host=localhost;charset=utf8mb4', 'james', '');
//$auth = new \Delight\Auth\Auth($db);
//$whoops = new \Whoops\Run;
//$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
//$whoops->register();


$connection = mysqli_connect('localhost', 'root', 'root', 'phpcmsDB');

if ($connection){
	echo "Connected to phpcmsDB via login.php";
} else {
	echo "You're not connected to the database.";
}
