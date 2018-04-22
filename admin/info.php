<?php
/**
 * Description
 *
 * @package CampFirePixels\${MY_NAMESPACE}
 * @since   1.0.0
 * @author  Danny G Smith
 * @link    https://CampFirePixels.com
 * @license GNU General Public License 2.0+
 */

require_once( __DIR__ . "/head.php" );
require_once( __DIR__ . '/../bootstrap.php' );

echo "<br><br><br><br><br>";
if ( $auth->isLoggedIn() ) {
	$email = $auth->getEmail();
	echo "Howdy " . $email . "<br>";
}
echo $auth->getUserId() . "<br>";
echo $auth->getEmail() . "<br>";
echo $auth->getUsername() . "<br>";

if ($auth->isNormal()) {
	echo "user is in default state";
}

if ($auth->isArchived()) {
	echo "user has been archived";
}

if ($auth->isBanned()) {
	echo "user has been banned";
}

if ($auth->isLocked()) {
	echo "user has been locked";
}

if ($auth->isPendingReview()) {
	echo "user is pending review";
}

if ($auth->isSuspended()) {
	echo "user has been suspended";
}

if ($auth->isRemembered()) {
	echo "user did not sign in but was logged in through their long-lived cookie";
}
else {
	echo "user signed in manually";
}

echo "Roles<br>";
//$auth->admin()->addRoleForUserById( 1, \Delight\Auth\Role::ADMIN);
//$auth->admin()->addRoleForUserById( 1, \Delight\Auth\Role::DEVELOPER);
//$auth->admin()->addRoleForUserById( 1, \Delight\Auth\Role::SUPER_ADMIN);
d( $auth->getRoles() );