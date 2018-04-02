;(function ( $, window, document, undefined ) {
   'use strict';

   $(document).ready(function() {
      $('.js-multiple-roles').select2({
         placeholder: 'Select one or more roles',
         multiple: 'multiple',
         //theme: "bootstrap",
         width: '350px'
      });

      $('.js-users').select2({
         placeholder: 'Select a user',
         width: '350px'
      });
      $('b[role="presentation"]').hide();
      $('.select2-selection__arrow').append('<i class="fa fa-angle-down"></i>');
   });

//   jQuery(document).ready(function( $ ) {
//
//      //$( "#chosen_roles" ).chosen( { width: "95%" } );
//
//
//      $("#roles-form").submit(function( event ) {
//      //$("#roles-button").submit(function( event ) {
//         event.preventDefault();
//
//         var data_to_send = $( '#chosen-roles' ).val();
//         var result = [];
//         var role;
//
//         jQuery(document).ready(function( $ ) {
//            $( {"#gform_wrapper_2" ).css( { "display": "inherit" } );
//         });
//
//         for ( var k = 0; k < data_to_send.length; k++ ) {
//            result[ k ] =  data_to_send[ k ] + "=checked"
//         }
//
//         alert( 'result: ' + result );
//
//         // Result Array
//         //$('#chosen_roles').on('change', function(e, params) {
//         //   alert(e.target.value); // OR
//         //   alert(this.value); // OR
//         //   alert(params.selected); // also in Panagiotis Kousaris' answer
//         //});
//
//         //data_to_send  = $.serialize( $( "#chosen_roles" ).val() );
//         //alert( $.serialize( data_to_send ) );
//         //console.log( $.serialize( $( "#chosen_roles" ).val() ) );
//         //array_push( $_POST[ 'chosen_roles' ], $( "#chosen_roles" ).val());
//         //var paramName = $( "#chosen_roles" ).val();
//
//         $.ajax({
//            url: "http://ajax.local/admin/user-roles-server.php",
//            type: "POST",
//            data: result,
//            dataType: "json",
//            success: function( response, status, http ) {
//               alert( result );
//               console.log( result );
//            },
//            error: function( http, status, error ) {
//               alert("Some Error Occurred : " + error );
//               alert( $( "#chosen_roles" ).val() );
//            }
//         });
//   } );
//});

})
(jQuery, window, document);

