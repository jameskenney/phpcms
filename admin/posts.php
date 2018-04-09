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
	            include "add_post.php";
	            break;

	        case 'edit_post';
		        include "edit_post.php";
		        break;

            default: include "view_all_posts.php";
        }
    ?>





