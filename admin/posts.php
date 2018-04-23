<?php
/**
 * Created by James Kenney.
 * User: James
 * Date: 4/7/2018
 * Time: 10:57 PM
 */
?>
<?php include( 'head.php' ) ?>
<?php require_once( 'config.php' ); ?>

    <?php
        if(isset($_GET['source'])){

            $source = $_GET['source'];
        } else {
            $source = '';
        }

        switch($source) {
            case 'add_post';
	            include "../includes/add_post.php";
	            break;

	        case 'edit_post';
		        include "../includes/edit_post.php";
		        break;

            default: include "../includes/view_all_posts.php";
        }
    ?>

<!-- This code will keep the drop down nav menu working after you click on post.php -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>





