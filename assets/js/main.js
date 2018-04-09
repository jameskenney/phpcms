;(function ( $, window, document, undefined ) {
   'use strict';

   var $js_user = $( '#js_users' );
   var $js_role = $( '#js_roles' );
   var $jsUser;
   var $jsRole;

   // get user to work add / remove rules
   //
   $( document ).ready( function () {

      function $getUserID() {

         $js_user.select2();
         $js_user.on( "change", function ( e ) {
            var data = $( this ).val();
            if ( data === 0 ) {
               alert( "nothing selected" );
               return null;
            } else {
               $jsUser = data;

               // after user is selected we need the email address of the user, id will not work
               $.ajax( {

                  url:      "http://cms.local/admin/get-email-ajax.php", // (default: The current page)
                  type:     "GET",                                       // GET, POST
                  data:     "id=" + $jsUser,                             // PlainObject or String or Array
                  dataType: "text",                                      // xml, json, script, or html

                  success: function ( response, status, http ) {
                     console.log( response );

                  },
                  error:   function ( http, status, error ) {
                     alert( "Some Error Occurred : " + error );
                  }

               } );
               console.log( response );

            }

            var url = "http://cms.local/admin/get-roles-ajax.php?id=" + $jsUser;
            //var url = "http://cms.local/admin/user-roles.php";
            $.get( url, function ( data ) {
               console.log( 'danny' );
               console.log( data );
               $( '#dgs' ).html( data );
            } )

         } )
      }

//} );
      /*
      1 click on email <= ajax to get roles <= trigger database read to get roles
      2 add role => update database with new role
      3 delete role => update database to remove role








       */

      //$( document ).ready( function () {
      $js_role.on( "select2:select", function ( e ) {
         if ( data === 0 ) {
            //alert("nothing selected");
            return null;
         } else {
            var data = e.params.data;
            //$js_role.val(['1', '2']);
            //$js_role.trigger('change'); // Notify any JS components that the value changed
            $jsRole = data;
            //console.log( JSON.stringify($jsRole) );
            //console.log( $js_role.val() );

            //alert( JSON.stringify(data) );
            //try {
            //$auth->admin()->addRoleForUserById($jsUser, data);
            //}
            //catch (\Delight\Auth\UnknownIdException $e) {
            //    //unknown user ID
            //}
         }
      } );

      //// Set up the Select2 control
      //$js_role.select2({
      //   ajax: {
      //      url: '/api/user'
      //   }
      //});

   } );

   $( document ).ready( function () {
      $js_user.select2( {
         placeholder: 'Select a user',
         width:       '350px'
      } );
   } );

   $( document ).ready( function () {
      $( '.js-multiple-roles' ).select2( {
         placeholder: 'Select one or more roles',
         multiple:    'multiple',
         width:       '350px'
      } );
   } );

})
( jQuery, window, document );

