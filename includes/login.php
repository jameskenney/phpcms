<?php
/**
 * Created by James Kenney.
 * User: James
 * Date: 4/25/2018
 * Time: 11:24 PM
 */
?>
<?php

include "../admin/db.php";
session_start();

//The login feature pushes its info to POST on this page

if(isset($_POST['login'])) { //$_POST['login'] grabs it and then stores the info in two variables

	$username = escape($_POST['username']);
	$password = escape($_POST['user_password']);


	$username = mysqli_real_escape_string( $connection, $username ); //Sanitizing $username to prevent sql injections.
	$password = mysqli_real_escape_string( $connection, $password ); //Sanitizing $password to prevent sql injections.

	$query             = "SELECT * FROM users_new WHERE username = '{$username}' ";
	$select_user_query = mysqli_query( $connection, $query );
	if (!$select_user_query) {

		die( "QUERY FAILED" . " " . mysqli_error( $connection ) );

	}

	while ( $row = mysqli_fetch_array( $select_user_query ) ) {

//	Take the result from $select_user_query and assigns it to the variable $row and loops through it

		$db_user_id        = escape($row['user_id']);
		$db_username       = escape($row['username']);
		$db_user_password  = escape($row['user_password']);
		$db_user_firstname = escape($row['user_firstname']);
		$db_user_lastname  = escape($row['user_lastname']);
		$db_user_role       = escape($row['user_role']);
	}

	if( $username !== $db_username && $password !== $db_user_password ) {

		header( "Location: ../index.php" );

	} else if( $username == $db_username && $password == $db_user_password ){
// Assign from right to left
		$_SESSION['username'] = $db_username;
		$_SESSION['firstname'] = $db_user_firstname;
		$_SESSION['lastname'] = $db_user_lastname;
		$_SESSION['user_role'] = $db_user_role;


		header( "Location: ../admin" );


	} else {
		header("Location: ../index.php");
	}

}
