<?php
/**
 * Created by James Kenney.
 * User: James
 * Date: 4/7/2018
 * Time: 10:57 PM
 */
?>

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




