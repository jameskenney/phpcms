<?php

require_once( __DIR__ . "/head.php" );


$list_of_roles = \Delight\Auth\Role::getNames();
//var_dump( $list_of_roles );

$j = 0;

?>
<form class="form-horizontal">

   <div class="user-permissions">
      <div class="col user-data">
		  <?php
		  if ( $j == 0 ) {
			  ?>


             <!-- Text input-->
             <div class="">
                <label class="control-label" for="email">User Email</label>
                <div class="email">
                   <input id="email" name="email" type="text" placeholder="user email" class="form-control input-md" required="">
                </div>
             </div>
			  <?php

			  // Email address
			  echo $email = $auth->getEmail( 'root' ) . "<br>";

			  //echo $userData = $auth->getUserDataByEmailAddress('dgs@riskiii.com', $requestedColumns ) . "<br>";

			  //$roles = new array();

			  //d( $auth->getRoles( 16 ) );

			  // Email address
			  echo $email = $auth->getEmail( 'root' ) . "<br>";

			  // Display name
			  echo $email = $auth->getUsername() . "<br>";

			  // User Id
			  echo $id = $auth->getUserId() . "<br>";

			  // ip address
			  echo $ip = $auth->getIpAddress() . "<br>";

			  if ( $auth->isNormal() ) {
				  echo "user is in default state" . "<br>";
			  }

			  if ( $auth->isArchived() ) {
				  echo "user has been archived" . "<br>";
			  }

			  if ( $auth->isBanned() ) {
				  echo "user has been banned" . "<br>";
			  }

			  if ( $auth->isLocked() ) {
				  echo "user has been locked" . "<br>";
			  }

			  if ( $auth->isPendingReview() ) {
				  echo "user is pending review" . "<br>";
			  }

			  if ( $auth->isSuspended() ) {
				  echo "user has been suspended" . "<br>";
			  }
		  } else { // ( $j == 0 )

			  echo " " . "";
		  }
		  $j ++; ?>

         <!-- Button -->
         <div class="">
            <label class="control-label" for="roles-button">Select Roles</label>
            <div class="">
               <button id="roles-button" type="submit" name="roles-button" class="btn btn-primary">Select Roles</button>

            </div>
         </div>

      </div> <!-- user-data -->

      <div class="col roll-1">
         <div class="checkbox">
            <label for="Admin"> <input type="checkbox" name="Admin" id="Admin" value="1"> Admin </label>
         </div>

         <div class="checkbox">
            <label for="Author"> <input type="checkbox" name="Author" id="Author" value="2"> Author </label>
         </div>

         <div class="checkbox">
            <label for="Collaborator"> <input type="checkbox" name="Collaborator" id="Collaborator" value="3"> Collaborator </label>
         </div>

         <div class="checkbox">
            <label for="Consultant"> <input type="checkbox" name="Consultant" id="Consultant" value="4"> Consultant </label>
         </div>

         <div class="checkbox">
            <label for="Consumer"> <input type="checkbox" name="Consumer" id="Consumer" value="5"> Consumer </label>
         </div>

         <div class="checkbox">
            <label for="Contributor"> <input type="checkbox" name="Contributor" id="Contributor" value="6"> Contributor </label>
         </div>

         <div class="checkbox">
            <label for="Coordinator"> <input type="checkbox" name="Coordinator" id="Coordinator" value="7"> Coordinator </label>
         </div>

         <div class="checkbox">
            <label for="Creator"> <input type="checkbox" name="Creator" id="Creator" value="8"> Creator </label>
         </div>

         <div class="checkbox">
            <label for="Developer"> <input type="checkbox" name="Developer" id="Developer" value="9"> Developer </label>
         </div>

         <div class="checkbox">
            <label for="Director"> <input type="checkbox" name="Director" id="Director" value="10"> Director </label>
         </div>

         <div class="checkbox">
            <label for="Editor"> <input type="checkbox" name="Editor" id="Editor" value="11"> Editor </label>
         </div>
      </div> <!-- .roll-1 -->
      <div class="col roll-2">
         <div class="checkbox">
            <label for="Employee"> <input type="checkbox" name="Employee" id="Employee" value="12"> Employee </label>
         </div>

         <div class="checkbox">
            <label for="Maintainer"> <input type="checkbox" name="Maintainer" id="Maintainer" value="13"> Maintainer </label>
         </div>

         <div class="checkbox">
            <label for="Manager"> <input type="checkbox" name="Manager" id="Manager" value="14"> Manager </label>
         </div>

         <div class="checkbox">
            <label for="Moderator"> <input type="checkbox" name="Moderator" id="Moderator" value="15"> Moderator </label>
         </div>

         <div class="checkbox">
            <label for="Publisher"> <input type="checkbox" name="Publisher" id="Publisher" value="16"> Publisher </label>
         </div>

         <div class="checkbox">
            <label for="Reviewer"> <input type="checkbox" name="Reviewer" id="Reviewer" value="17"> Reviewer </label>
         </div>

         <div class="checkbox">
            <label for="Subscriber"> <input type="checkbox" name="Subscriber" id="Subscriber" value="18" checked> Subscriber </label>
            <div id="txtAge" style="display:none">Age is something</div>
         </div>

         <div class="checkbox">
            <label for="Super_admin"> <input type="checkbox" name="Super_admin" id="Super_admin" value="19"> Super_admin </label>
         </div>

         <div class="checkbox">
            <label for="Super_editor"> <input type="checkbox" name="Super_editor" id="Super_editor" value="20"> Super_editor </label>
         </div>

         <div class="checkbox">
            <label for="Super_moderator"> <input type="checkbox" name="Super_moderator" id="Super_moderator" value="21"> Super_moderator </label>
         </div>

         <div class="checkbox">
            <label for="Translator"> <input type="checkbox" name="Translator" id="Translator" value="22"> Translator </label>
         </div>
      </div> <!-- .roll-2 -->
   </div> <!-- .user-permissions -->
</form> <!-- form-horizontal -->


<!-- Add roles --><?php
# 1) after user is added, get userid
# 1)
# 1)
# 1) get a list of current rules for the user
# 2) sort rules
# 3) build form with the current rules checked.
# 4) on submit 1) if checkbox is set add rule
#              2) if checkbox is not set, remove rule
#
#
#
#
#
#
try {
	$auth->admin()->addRoleForUserByUsername( 'root', \Delight\Auth\Role::ADMIN );
} catch ( \Delight\Auth\UnknownUsernameException $e ) {
	// unknown username
} catch ( \Delight\Auth\AmbiguousUsernameException $e ) {
	// ambiguous username
}


//try {
//	$auth->admin()->removeRoleForUserByUsername($username, \Delight\Auth\Role::ADMIN);
//}
//catch (\Delight\Auth\UnknownUsernameException $e) {
//	// unknown username
//}
//catch (\Delight\Auth\AmbiguousUsernameException $e) {
//	// ambiguous username
//}


//$auth->admin()->getRolesForUserById($userId);


require_once( __DIR__ . "/footer.php" ); ?>
<script>
   ;(function ( $, window, document, undefined ) {
      'use strict';

      jQuery( document ).ready( function ( $ ) {
         if ( $( "#Subscriber" ).is( ':checked' ) ) {
            $( "#txtAge" ).show();
         }// checked
         else {
            $( "#Translator" ).hide();
         }  // unchecked
      } );

   })
   ( jQuery, window, document );
</script>

<!--var_dump( \Delight\Auth\Role::getNames() );-->
<!--global var $server_name = strip_tags( trim( $_SERVER[ 'SERVER_NAME' ] ) );-->
<!--global var $server  = "http://"      . $server_name . "/admin/getuserid.php=?";-->
<!--global var $server_data = 'userId=' . "\urlencode( " . $userId . " );-->
<script>
   ;(function ( $, window, document, undefined ) {
      //'use strict';

      let $server_name  = location.protocol + '//' + location.host;
      let $server       = "/admin/getuserid.php=?";
      let $server_data  = 'userId=' . "$userId;

      jQuery( document ).ready( function ( $ ) {

         var userEmail;

         $( "div.email" )
            .focusout( function () {
               userEmail = email.value;
               console.log( userEmail );
            } )

         $.ajax( {
            url:     $server_name,
            data:    "/admin/getuserid.php=?",
            success: function ( $server_data ) {
               console.log( $server_data );
               //$( '#twitter-loader' ).remove();
               //$( '#twitter-container' ).html( data );
            }
         } );
      } );

   })
   ( jQuery, window, document );
</script>