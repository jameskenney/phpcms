<?php
function buildRoles() {
	$list_of_roles = \Delight\Auth\Role::getNames();

	global $rolesJson;
	$rolesJson = '';

	for ( $k = 0; $k < count( $list_of_roles ); $k ++ ) {

		$rolesJson .= '    <option value="' . $list_of_roles[ $k ] . '">' . $list_of_roles[ $k ] . '</option>';
	}

	echo( $rolesJson );
}

buildRoles();