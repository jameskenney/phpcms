<?php
require_once( __DIR__ . '/../bootstrap.php' );

// Receive the Data from Client
d( $_POST );
$data  = $_POST;
$roles = $data['chosen-roles'];

echo json_encode( $roles );