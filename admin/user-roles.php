<?php

require_once( __DIR__ . "/head.php" ); ?>

<link rel="stylesheet" href="/assets/docsupport/prism.css">
<link rel="stylesheet" href="/assets/css/chosen.css"><?php

$j = 0;
$list_of_roles = \Delight\Auth\Role::getNames();
?>
<form id="roles-form" class="form-horizontal" method="POST">

   <div class="user-permissions">
      <div class="col user-data">
		  <?php
		  if ( $j == 0 ) {
			  ?>
             <!-- Text input-->
             <div class="user-email">
                <label class="control-label" for="email">User Email</label>
                <div class="email">
                   <input id="email" name="email" type="text" placeholder="user email"
                          class="form-control input-md" required="">
                </div>
             </div>
			  <?php

		  }
		  $j ++;
		  ?>

         <div id="container">
            <div id="content">
               <div class="side-by-side clearfix">
                  <div>
                     <em>This is a multiselect test ...</em>
                     <select id="chosen-roles" data-placeholder="Choose as many roles as you need ..."
                             name="chosen-roles" class="chosen-roles chosen-select" multiple tabindex="1">
                        <option value=""></option>
						  <?php
						  foreach ( $list_of_roles as $role ) { ?>
                             <option value="<?php echo $role ?>"><?php echo $role ?></option>
						  <?php } ?>
                     </select>
                  </div>
               </div>
            </div>
         </div>

         <!-- Button -->
         <div class="">
            <!--            <label class="control-label" for="roles-button">Select Roles</label>-->
            <div class="">
               <button id="roles-button" type="submit" name="roles-button"
                       class="roles-button btn btn-primary">Select Roles</button>
            </div>
         </div>
         <?php //d( $_POST ); ?>
      </div> <!-- user-data -->

   </div> <!-- .user-permissions -->
</form> <!-- form-horizontal -->

<!-- Add roles --><?php
$data         = $_POST;
$currentRoles = $auth->admin()->getRolesForUserByEmail( $email );
$result       = array ();

//d( $currentRoles );
//var_dump( $list_of_roles );
//d( $_POST );
?>
<div>
   <p style="color:red;">roles to be added : </p>
   <p id="roles_box">See your roles here</p>
</div>

<?php
require_once( __DIR__ . "/footer.php" ); ?>
<!--<script src="/assets/docsupport/jquery-3.2.1.min.js" type="text/javascript"></script>-->
<script src="/assets/js/chosen.jquery.js" type="text/javascript"></script>
<script src="/assets/docsupport/prism.js" type="text/javascript" charset="utf-8"></script>
<script src="/assets/docsupport/init.js" type="text/javascript" charset="utf-8"></script>
