<?php
function buildRoles() {
$list_of_roles = \Delight\Auth\Role::getNames();

global $rolesJson;
$rolesJson = '{ "roles": [ <br>';

for ( $k = 0; $k < count( $list_of_roles ); $k ++ ) {
if ( $k == count( $list_of_roles ) - 1 ) {
$rolesJson .= ' { "id": ' . $k . ',<br> "text": "' . $list_of_roles[ $k ] . '"<br> } <br>';

} else {
$rolesJson .= ' { "id": ' . $k . ',<br> "text": "' . $list_of_roles[ $k ] . '"<br> }, <br>';
}
}

$rolesJson .= ' ]<br> }<br>';
//echo "<pre>";
	//echo $rolesJson;
	//echo "</pre>";
return( $rolesJson );
}
