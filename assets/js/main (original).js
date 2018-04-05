;(function ( $, window, document, undefined ) {
   'use strict';

   var $js_user  = $('#js_users');
   var $js_role  = $('#js_roles');

   $( document ).ready( function () {
      $( '.js-multiple-roles' ).select2( {
         placeholder: 'Select one or more roles',
         multiple:    'multiple',
         //theme: "bootstrap",
         width:       '350px'
      } );
   } );

   var $user_roles;
   var $jsUser;


      $( document ).ready( function () {
         $js_user.select2();
         $js_user.on( "change", function ( e ) {
            var data = $( this ).val();
            if ( data === 0 ) {
               //alert("nothing selected");
               return null;
            } else {
               console.log( data );
               $js_user = data;
               console.log( $js_user );
            }
         } );
   } );

      $(document).ready(function () {
         $('#js_role').on("select2:select", function(e) {
         //alert( JSON.stringify(data) );
         if (data === 0) {
            //alert("nothing selected");
            return null;
         } else {
            var data = e.params.data;
            console.log( data );
            console.log( $js_user );
            //try {
            //$auth->admin()->addRoleForUserById($jsUser, data);
            //}
            //catch (\Delight\Auth\UnknownIdException $e) {
            //    //unknown user ID
            //}
         }
      });

   } );

   $( document ).ready( function () {
      $( '.js-users' ).select2( {
         placeholder: 'Select a user',
         width:       '350px'
      } );
      //$( 'b[role="presentation"]' ).hide();
      //$( '.select2-selection__arrow' ).append( '<i class="fa fa-angle-down"></i>' );
   } );

})
( jQuery, window, document );

