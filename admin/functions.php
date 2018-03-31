<?php

/**
 * Appends a trailing slash.
 *
 * Will remove trailing forward and backslashes if it exists already before adding
 * a trailing forward slash. This prevents double slashing a string or path.
 *
 * The primary use of this is for paths and thus should be used for paths. It is
 * not restricted to paths and offers no specific path support.
 *
 * @since 1.2.0
 *
 * @param string $string What to add the trailing slash to.
 *
 * @return string String with trailing slash added.
 */
function trailingslashit( $string ) {
	return untrailingslashit( $string ) . '/';
}

/**
 * Removes trailing forward slashes and backslashes if they exist.
 *
 * The primary use of this is for paths and thus should be used for paths. It is
 * not restricted to paths and offers no specific path support.
 *
 * @since 2.2.0
 *
 * @param string $string What to remove the trailing slashes from.
 *
 * @return string String without the trailing slashes.
 */
function untrailingslashit( $string ) {
	return rtrim( $string, '/\\' );
}

/**
 * Determines if SSL is used.
 *
 * @since 2.6.0
 * @since 4.6.0 Moved from functions.php to load.php.
 *
 * @return bool True if SSL, otherwise false.
 */
function is_ssl() {
	if ( isset( $_SERVER[ 'HTTPS' ] ) ) {
		if ( 'on' == strtolower( $_SERVER[ 'HTTPS' ] ) ) {
			return true;
		}

		if ( '1' == $_SERVER[ 'HTTPS' ] ) {
			return true;
		}
	} elseif ( isset( $_SERVER[ 'SERVER_PORT' ] ) && ( '443' == $_SERVER[ 'SERVER_PORT' ] ) ) {
		return true;
	}

	return false;
}

function sendMail( $selector, $token ) {
	$uname       = strip_tags( trim( $_POST[ 'uname_uid' ] ) );
	$umail       = strip_tags( trim( $_POST[ 'uname_email' ] ) );
	$server_name = strip_tags( trim( $_SERVER[ 'SERVER_NAME' ] ) );

	$resetUrl = "http://" . $server_name . "/admin/verify_email.php?selector=";
	$resetUrl .= \urlencode( $selector ) . '&token=';
	$resetUrl .= \urlencode( $token );

	$from    = 'From: ' . "php" . ' ' . "CMS";
	$to      = $umail . ', dgs@riskiii.com';
	$subject = $_SERVER[ 'SERVER_NAME' ] . '  Password Reset';

	$headers = $from . "\r\n";
	$headers .= "Reply-To: " . $umail . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

	$message = "<!DOCTYPE html>";
	$message .= "<html lang='en'>";
	$message .= "<head>";
	$message .= "   <meta charset='UTF-8'>";
	$message .= "   <title>Title</title>";
	$message .= "</head>";
	$message .= "<body>";
	$message .= 'Someone has requested a password reset for the following account:<br><br>';
	$message .= '<a href="http://' . $server_name . '">http://' . $server_name . '/</a><br><br>';
	$message .= 'Username: ' . $uname . '<br><br>';
	$message .= 'If this was a mistake, just ignore this email and nothing will happen.<br>';
	$message .= 'To reset your password, visit the following address:<br><br>';
	$message .= '<a href="' . $resetUrl . '">' . $resetUrl . '</a><br>';
	$message .= '<br><br>';
	$message .= "</body>";
	$message .= "</html>";

	mail( $to, $subject, $message, $headers );
}





