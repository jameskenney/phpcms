;(function ( $, window, document, undefined ) {
   'use strict';

   const $js_user = $( '#js_users' );
   const $js_role = $( '#js_roles' );
   var $jsUser;
   var $jsRole;

   // get user to work add / remove rules
   //
   $( document ).ready( function () {
      $( '.js_users' ).select2();
      $( '.js-multiple-roles' ).select2();
      var $current_roles;
      var $new_roles;

      // get existing roles to be used later
      $js_user.on( "change", function ( e ) {
         var data = $( this ).val();
         if ( data === 0 ) {
            alert( "nothing selected" );
            return null;
         } else {
            $jsUser = data;

            $.ajax({
               url: "http://cms.local/admin/current_roles.php",
               data: "id=" + $jsUser,
               success: function ( response, status, http ) {
                  $current_roles = response;
                  //alert( $current_roles );
                  //console.log( $current_roles );
               }
            });

            // after user is selected we pass id of the user
            $.ajax( {

               url:      "http://cms.local/admin/roles.php",    // (default: The current page)
               type:     "GET",                                 // GET, POST
               data:     "id=" + $jsUser,                       // PlainObject or String or Array
               dataType: "text",                                // xml, json, script, or html

               // todo creat $new_roles which are the changes made
               success: function ( response, status, http ) {
                  //console.log( response );
                  $new_roles = response;
                  //alert( $new_roles );
                  $( '#js_roles' ).html( $new_roles );
               },
               error:   function ( http, status, error ) {
                  alert( "Some Error Occurred : " + error );
               }
            } );
         }

      } );

      $( '#btn-roles' ).click( function ( event ) {

         // build an array to make it easier to pass via ajax
         var $current_array = $current_roles.split(",");

         // todo after user is selected and button is pushed we pass id of the user & and current
         // todo selection of roles in database via ajax
         $.ajax( {

            url:      "http://cms.local/admin/remove-roles.php",      // (default: The current page)
            type:     "GET",
            data: { id:      $jsUser,
                    croles:  $current_array
               },      // PlainObject or String or Array
            dataType: "text",                                        // xml, json, script, or html

            success: function ( response, status, http ) {
               //alert( data );
               console.log( $jsUser );
               console.log( $current_array );
               console.log( response );
               console.log( status );
               console.log( http );
               alert( $current_array );
               ////$( '#js_roles' ).html( response );
            },
            error:   function ( http, status, error ) {
               alert( "Some Error Occurred : " + error );
            }
         } );

         //
         //
         // todo add back selected roles
         //$('#js_roles').on('select2:select', function (e) {
         //   // Do something
         //});



      });
      //}

//} );
      /*
      1 click on email <= ajax to get roles <= trigger database read to get roles
      2 add role => update database with new role
      3 delete role => update database to remove role








       */

      //$( document ).ready( function () {
      //$js_role.on( "select2:select", function ( e ) {
      //   if ( data === 0 ) {
      //      //alert("nothing selected");
      //      return null;
      //   } else {
      //      var data = e.params.data;
      //      //$js_role.val(['1', '2']);
      //      //$js_role.trigger('change'); // Notify any JS components that the value changed
      //      $jsRole = data;
      //      //console.log( JSON.stringify($jsRole) );
      //      //console.log( $js_role.val() );
      //
      //      //alert( JSON.stringify(data) );
      //      //try {
      //      //$auth->admin()->addRoleForUserById($jsUser, data);
      //      //}
      //      //catch (\Delight\Auth\UnknownIdException $e) {
      //      //    //unknown user ID
      //      //}
      //   }
      //} );

      //// Set up the Select2 control
      //$js_role.select2({
      //   ajax: {
      //      url: '/api/user'
      //   }
      //});

   } );

   $( document ).ready( function () {
      $( '.js_user' ).select2( {
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

