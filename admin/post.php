<?php
/**
 * Created by James Kenney.
 * User: James
 * Date: 4/7/2018
 * Time: 10:57 PM
 */
?>
<?php include( 'head_admin.php' ) ?>
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

	        case '100';
		        echo "Nice 100";
		        break;

	        case '200';
		        echo "Nice 200";
		        break;

            default:

                include "view_all_posts.php";
        }

    ?>


<?php error_reporting(E_ALL); ?>


