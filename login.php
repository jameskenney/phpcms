<?php
ob_start();
include "admin/functions.php";
require_once( __DIR__ . "/admin/head.php" );

if ( isset( $_POST[ 'btn-login' ] ) ) {
	$uname = strip_tags( trim( $_POST[ 'uname_name' ] ) );
	$umail = strip_tags( trim( $_POST[ 'uname_email' ] ) );
	$upass = strip_tags( trim( $_POST[ 'password' ] ) );

	try {
	   //$auth->loginWithUsername($username, $password, $rememberDuration = null, callable $onBeforeSuccess = null)
		$auth->loginWithUsername( $uname, $upass, (60 * 60 * 24), null );
		//echo "user is logged in" . "<br>";
	} catch ( \Delight\Auth\UnknownUsernameException $e ) {
		//echo "unknown username" . "<br>";
	} catch ( \Delight\Auth\AmbiguousUsernameException $e ) {
		//echo "ambiguous username" . "<br>";
	} catch ( \Delight\Auth\InvalidPasswordException $e ) {
		//echo "wrong password" . "<br>";
	} catch ( \Delight\Auth\EmailNotVerifiedException $e ) {
		//echo "email not verified" . "<br>";
	} catch ( \Delight\Auth\TooManyRequestsException $e ) {
		//echo "too many requests" . "<br>";
	}
}

if ( $auth->isLoggedIn() ) {
	$email = $auth->getEmail();
	echo "Howdy " . $email . "<br>";
}
?> <!-- Button trigger modal -->
   <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
      Login Now
   </button>

   <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
         <form class="signup-form-container modal-content" role="form" method="post" id="login-form" name="login-form">
            <div class="modal-header">
               <div class="form-header">
                  <h3><span class="login-title"><img src="assets/fonts/solid/user.svg" class="user"> php CMS</span> <span
                           class="login-title-right"><img src="assets/fonts/solid/pencil-alt.svg" class="pencil-alt"></span>
                  </h3>

                  <div id="error">
					  <?php
					  if ( isset( $error ) ) {
						  ?>
                         <div class="alert alert-danger">
                            <img src="assets/fonts/solid/exclamation-triangle.svg" class="user"> &nbsp; <?php echo $error; ?> !
                         </div>
						  <?php
					  }
					  ?>
                  </div>
               </div>  <!-- .form-header -->
            </div>
            <div class="form-body modal-body">

               <div class="form-group">
                  <div class="input-group input-group-relative">
                     <div class="input-group-addon"><img src="assets/fonts/solid/user.svg" class="user"></div>
                     <input name="uname_name" type="text" id="name" class="form-control" placeholder="User ID" maxlength="40"
                            autofocus="true">
                  </div>
                  <span class="help-block" id="check-u"></span>
               </div>

               <div class="form-group">
                  <div class="input-group input-group-relative">
                     <div class="input-group-addon"><img src="assets/fonts/solid/user.svg" class="email"></div>
                     <input name="uname_email" type="text" id="email" class="form-control" placeholder="Email Address" maxlength="40"
                            autofocus="true">
                  </div>
                  <span class="help-block" id="check-e"></span>
               </div>

               <div class="form-group form-group-zero">
                  <div class="input-group input-group-relative">
                     <div class="input-group-addon"><img src="assets/fonts/solid/lock.svg" class="clock"></div>
                     <input name="password" id="password" type="password" class="form-control" placeholder="Password">
                  </div>
                  <span class="help-block" id="error"></span>
               </div>

            </div> <!-- .form-body -->

            <div class="form-footer modal-footer">
               <div class="row">
                  <div class="form-group  left-col col-lg-6">
                     <button type="submit" name="btn-login" class="btn btn-info" id="btn-signup">
<!--                        <button type="submit" name="btn-login" class="btn btn-info" id="btn-signup" onclick="Redirect()">-->
                        <img src="assets/fonts/solid/sign-in.svg" class="sign-in"> &nbsp; Login Now
                     </button>
                  </div>

                  <div class="form-group  right-col col-lg-6">
                     <a href="admin/forgot_password.php">Forgot password?</a>
                  </div>
               </div>
            </div>  <!-- .form-footer -->
         </form>
      </div>
   </div>
<?php
require_once( __DIR__ . "/admin/footer.php" );

