<?php

require_once( __DIR__ . "/head.php" );  //This includes config.php


if ( isset( $_POST[ 'btn-login' ] ) ) {
	$uname = strip_tags( trim( $_POST[ 'uname_email' ] ) );
	$umail = strip_tags( trim( $_POST[ 'uname_email' ] ) );
	$upass = strip_tags( trim( $_POST[ 'password' ] ) );
}
?>

	<div class="user_listing">

		<?php
		try {
			$user_list = $db->prepare(
				"SELECT username, email FROM users ORDER BY id" );
			$user_list->execute();
		} catch ( Exception $e ) {
			echo $e->getMessage();
			die();
		}
		$user_display = $user_list->fetchAll( PDO::FETCH_ASSOC );

		d($user_display);
		?>

		<div class="form-group">
			<label for="sel1">User list:</label>
			<select class="form-control" id="sel1">
				<!-- option 1 is a baseline test-->
				<option>1</option>
				<option><?php
					for ($user_display = 0; $user_display < count($user_list); $user_display++) {
						print_r($user_display);
					}
					?></option>
			</select>
		</div>

	</div>

<?php
require_once( __DIR__ . "/footer.php" );
?>