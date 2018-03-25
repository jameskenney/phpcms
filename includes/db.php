<?php
/**
 * Created by James Kenney.
 * User: James
 * Date: 3/24/2018
 * Time: 10:36 PM
 */

$connection = mysqli_connect('localhost', 'root', 'root', 'phpcmsDB');

if ($connection){
	echo "Connected to phpcmsDB";
}