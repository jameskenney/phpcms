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

})
(jQuery, window, document);

