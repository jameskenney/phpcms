<?php

require_once( __DIR__ . '/../vendor/autoload.php' );
require_once( __DIR__ . '/config.php' );
require_once( __DIR__ . '/functions.php' );


//var $rolesJson;


$db = new \PDO( 'mysql:dbname=phpcmsDB;host=localhost;charset=utf8mb4', 'phpcmsDB', 'T)Pu.WuRE6zW8X' );

function buildRoles() {
	$list_of_roles = \Delight\Auth\Role::getNames();

	//global $rolesJson;
	global $auth;
	$rolesJson = '';

	//$roles = [];
	//$roles = $this->admin()->getRolesForUserById( $rolesJson );

	for ( $k = 0; $k < count( $list_of_roles ); $k ++ ) {

		$theRole = $auth->admin()->getRolesForUserById( $k );

		if ( $theRole != null ) {
			$rolesJson .= "    <option selected='selected' value=$k >" . $list_of_roles[ $k ] . "</option>";

		} else {
			$rolesJson .= "    <option value=$k>" . $list_of_roles[ $k ] . "</option>";
		}
	}



	//echo( $rolesJson );
	//$( 'js_roles' ).load('user-roles.php');
	//return( $rolesJson );
}

$id = buildRoles();

$roles = [];
$roles = $auth->admin()->getRolesForUserById( $id );

foreach ( $roles as $key => $value ) {
	echo( "    <option value=$key selected='selected'>" . $value . "</option>" );
}