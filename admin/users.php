<?php
require_once( __DIR__ . '/../bootstrap.php' );

if(isset($_GET['source'])){

	$source = $_GET['source'];

} else {

	$source = '';

}

switch ($source){

	case 'add_user';
		include "../includes/add_user.php";
		break;

	case 'edit_user';
		include "../includes/edit_user.php";
		break;


	case '200';
		include "NICE 200";
		break;

	default:
		include "../includes/view_all_users.php";
		break;
}
?>