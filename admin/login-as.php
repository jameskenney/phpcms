<?php

require_once( __DIR__ . "/head.php" );
require_once( __DIR__ . '/../bootstrap.php' );

if ( isset( $_POST[ 'btn-login' ] ) ) {
	$uname = strip_tags( trim( $_POST[ 'uname_email' ] ) );
	$umail = strip_tags( trim( $_POST[ 'uname_email' ] ) );
	$upass = strip_tags( trim( $_POST[ 'password' ] ) );
}
?>

<form class="signup-form-container" role="form" method="post"
      id="login-form" name="login-form">

	<div class="form-header">
		<h3><span class="login-title">Login As</span>
			<span class="login-title-right"><img src="../assets/fonts/solid/pencil-alt.svg" class="pencil-alt"></span>
		</h3>

		<div id="error">
			<?php
			if ( isset( $error ) ) {
				?>
				<div class="alert alert-danger"> exclamation-triangle
					<img src="../assets/fonts/solid/exclamation-triangle.svg" class="user"> &nbsp; <?php echo $error; ?> !
				</div>
				<?php
			}
			?>
		</div>
	</div>  <!-- .form-header -->

	<div class="form-body">

		<!-- json response will be here -->
		<div id="errorDiv"></div>
		<!-- json response will be here -->

		<div class="form-group">
			<div class="input-group input-group-relative">
				<div class="input-group-addon"><img src="../assets/fonts/solid/user.svg" class="user"></div>
				<input name="uname_uid" type="text" id="uid" class="form-control" placeholder="User ID or Name" maxlength="40"
				       autofocus="true">
			</div>
			<span class="help-block" id="check-e"></span>
		</div>

		<div class="form-group">
			<div class="input-group input-group-relative">
				<div class="input-group-addon"><img src="../assets/fonts/solid/envelope.svg" class="user"></div>
				<input name="uname_email" type="text" id="name" class="form-control" placeholder="Email Address" maxlength="40"
				       autofocus="true">
			</div>
			<span class="help-block" id="check-e"></span>
		</div>



		<div class="form-group">
			<div class="input-group">
				<div class="input-group-addon"><img src="../assets/fonts/solid/lock.svg" class="clock"></span></div>
				<input name="password" id="password" type="password" class="form-control" placeholder="Password">
			</div>
			<span class="help-block" id="error"></span>
		</div>

		<div class='clear_both'></div>
		<div id='pass_meter'></div>


	</div>
	<div class="form-footer">
		<div class="row">
			<div class="form-group  left-col col-lg-6">
				<button type="submit" name="btn-register" class="btn btn-info" id="btn-signup">
					<img src="../assets/fonts/solid/sign-in.svg" class="sign-in"> &nbsp; Login
				</button>
			</div>

			<!--            <div class="form-group  right-col col-lg-6">-->
			<!--               <a href="forgot_password.php">Forgot password?</a>-->
			<!--            </div>-->
		</div>
	</div>  <!-- .form-footer -->
</form>

<?php
require_once( __DIR__ . "/footer.php" );

?>
