<?php
require_once( "head.php" );

if ( isset( $_POST[ 'btn-logout' ] ) ) {

	$auth->logOut();
	header('Location: ' . $server_name);
}
?>

   <!-- Button trigger modal -->
   <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
      Logout CMS?
   </button>

   <!-- Modal -->
   <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
         <form class="signout-form-container" role="form" method="post" id="logout-form" name="logout-form">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Are you sure you want to exit CMS?</h5>
                  <!--				<button type="button" class="close" data-dismiss="modal" aria-label="Close" id="btn-logout">-->
                  <!--					<span aria-hidden="true">&times;</span>-->
                  <!--				</button>-->
               </div>
               <div class="modal-body"></div>
               <button type="submit" name="btn-logout" class="btn btn-info" id="btn-logout">
                  <img src="../assets/fonts/solid/sign-out.svg" class="logout"> &nbsp; Exit or logout CMS
               </button>
            </div>
         </form>
      </div>
   </div>
<?php
require_once( "footer.php" );

