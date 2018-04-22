

$(document).ready(function()){


    // Editor CKEDITOR
    ClassicEditor
        .create( document.querySelector( '#body' ), {
            removePlugins: [ 'Heading', 'Link' ],
            toolbar: [ 'bold', 'italic', 'bulletedList', 'numberedList']
        } )
        .catch( error => {
        console.log( error );
}


);



}






