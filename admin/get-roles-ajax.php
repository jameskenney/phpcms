<?php
require_once( 'config.php' );
require_once( 'functions.php' );
require_once( __DIR__ . '/../vendor/autoload.php' );

$db = new \PDO( 'mysql:dbname=phpcmsDB;host=localhost;charset=utf8mb4', 'phpcmsDB', 'T)Pu.WuRE6zW8X' );

//$id = $_GET[ 'email' ];
//$email = $auth->getEmail();
//$email = $_GET['email'];
//echo $email;
$id = 16;

if (isset($_GET)) {
	$id = $_GET[ 'id' ];
   //echo $id;
	$roles = [];
	$roles = $auth->admin()->getRolesForUserById( $id );
   //d( $roles );
   //echo $roles['email'];
   //echo 'danny';

   //function buildRoles() {
	//$list_of_roles = \Delight\Auth\Role::getNames();

	foreach ( $roles as $key => $value ) {
		echo( "    <option value=$key selected='selected'>" . $value . "</option>" );
		//$auth->admin()->addRoleForUserById( $id, $value );
	}
}