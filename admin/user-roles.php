<?php

require_once( __DIR__ . "/head.php" );


$list_of_roles = \Delight\Auth\Role::getNames();


$roles = json_encode( $list_of_roles );
//var_dump( $roles );


$j = 0;

?>
<form class="signup-form-container" method="post" id="roles-form" name="roles-form">

   <div class="form-header">
      <h3><span class="login-title"><img src="../assets/fonts/solid/user.svg" alt="icon of user"
                                         class="user"> Add / Remove Roles</span> <span
               class="login-title-right">
               <img src="../assets/fonts/solid/pencil-alt.svg" alt="icon of pencil" class="pencil-alt"></span>
      </h3>

      <div id="error">
		  <?php
		  if ( isset( $error ) ) {
			  ?>
             <div class="alert alert-danger"> exclamation-triangle <img src=".
             ./assets/fonts/solid/exclamation-triangle.svg" class="user" alt="icon
              of triangle" >&nbsp; <?php echo $error; ?> !
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
            <label class="control-label" for="js-user">Select email of user to change roles</label><br>
            <div class="input-group-addon">
               <img src="../assets/fonts/solid/envelope.svg" alt="icon of mail" class="user">
            </div>
            <select id="js-user" id="js-user" class="js-users style='width: 340px'">
			    <?php require_once( __DIR__ . "/users.php" ); ?> <!-- populate users  -->
            </select>
         </div>
         <span class="help-block" id="check-u"></span>
      </div>

      <div class="form-group">
         <div class="input-group input-group-relative">
            <label class="control-label" for="js-roles">Add or subtract roles</label><br>
            <div class="input-group-addon">
               <img src="../assets/fonts/solid/search.svg" alt="icon of user" class="user">
            </div>
            <select id="js-roles" id="js-roles" class="js-multiple-roles style='width: 340px' multiple='multiple'">
				<?php require_once( __DIR__ . "/roles.php" ); ?> <!-- populate user role choices -->
            </select>
         </div>
         <span class="help-block" id="check-s"></span>
      </div>

   </div>
   <div class="form-footer">
      <div class="row">
         <div class="form-group left-col col-lg-6">
            <button type="submit" name="btn-roles" class="btn btn-info" id="btn-signup">
               <img src="../assets/fonts/solid/sign-in.svg" alt="sign-in icon" class="sign-in"> &nbsp; Select Roles
            </button>
         </div>
      </div>
   </div>  <!-- .form-footer -->
</form> <!-- form-horizontal -->

<?php

require_once( __DIR__ . "/footer.php" ); ?>

