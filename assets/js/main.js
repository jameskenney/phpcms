;(function ( $, window, document, undefined ) {
   'use strict';

   var $js_user = $( '#js_users' );
   var $js_role = $( '#js_roles' );
   var $jsUser;
   var $jsRole;




   // get user to work add / remove rules
   //
   $( document ).ready( function () {
      $js_user.select2();
      $js_user.on( "change", function ( e ) {
         var data = $( this ).val();
         if ( data === 0 ) {
            //alert("nothing selected");
            return null;
         } else {
            $jsUser = data;
            console.log( $js_user );
            //alert( $jsUser );

            // Fetch the preselected item, and add to the control
            $.ajax({
               type: 'GET',
               url: '/admin/role/s/' + $jsUser
            }).then(function (data) {
               // create the option and append to Select2
               var option = new Option(data.email, data.id, true, true);
               $js_role.append(option).trigger('change');

               // manually trigger the `select2:select` event
               $js_role.trigger({
                  type: 'select2:select',
                  params: {
                     data: $js_role.val()
                  }
               });
            });
         }
      } );

      //================================================================
      //save company information



   //$( document ).ready( function () {
      $js_role.on( "select2:select", function ( e ) {
         //if ( data === 0 ) {
         //   //alert("nothing selected");
         //   return null;
         //} else {
            var data = e.params.data;
            //$js_role.val(['1', '2']);
            //$js_role.trigger('change'); // Notify any JS components that the value changed
            $jsRole = data;
            //console.log( JSON.stringify($jsRole) );
            console.log( $js_role.val() );

         //alert( JSON.stringify(data) );
            //try {
            //$auth->admin()->addRoleForUserById($jsUser, data);
            //}
            //catch (\Delight\Auth\UnknownIdException $e) {
            //    //unknown user ID
            //}
         //}
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

