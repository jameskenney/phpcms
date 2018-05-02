<?php
/**
 * Created by James Kenney.
 * User: James
 * Date: 4/8/2018
 * Time: 11:52 AM
 */
?>

<?php

require( '../admin/config.php' );?>
<?php include( '../includes/head.php' ); ?>

<body>
<div class="home-container">
    <div class="container-fluid">
		<?php require 'navigation.php'; ?>
        <div class="row">
            <div class="col-md-12">
                <div class="row">
	                <?php  // Get request user id and database data extraction

	                if(isset($_GET['edit_user'])){

		                $the_user_id =  $_GET['edit_user'];

		                $query = "SELECT * FROM users_new WHERE user_id = $the_user_id ";
		                $select_users_query = mysqli_query($connection,$query);

		                while($row = mysqli_fetch_assoc($select_users_query)) {

			                $user_id        = $row['user_id'];
			                $username       = $row['username'];
			                $user_password  = $row['user_password'];
			                $user_firstname = $row['user_firstname'];
			                $user_lastname  = $row['user_lastname'];
			                $user_email     = $row['user_email'];
			                $user_image     = $row['user_image'];
			                $user_role      = $row['user_role'];

		                }
		                ?>

		                <?php  // Post request to update user

		                if(isset($_POST['edit_user'])) {

			                $user_firstname   = $_POST['user_firstname'];
			                $user_lastname    = $_POST['user_lastname'];
			                $user_role        = $_POST['user_role'];

			                // $post_image = $_FILES['image']['name'];
			                // $post_image_temp = $_FILES['image']['tmp_name'];

			                $username      = $_POST['username'];
			                $user_email    = $_POST['user_email'];
			                $user_password = $_POST['user_password'];
			                $post_date     = date('d-m-y');

			                if(!empty($user_password)) {

				                $query_password = "SELECT user_password FROM users_new WHERE user_id =  $the_user_id";
				                $get_user_query = mysqli_query($connection, $query_password);
				                confirmQuery($get_user_query);

				                $row = mysqli_fetch_array($get_user_query);

				                $db_user_password = $row['user_password'];

				                if($db_user_password != $user_password) {

					                $hashed_password = password_hash($user_password, PASSWORD_BCRYPT, array('cost' => 12));

				                }

				                $query = "UPDATE users_new SET ";
				                $query .="user_firstname  = '{$user_firstname}', ";
				                $query .="user_lastname = '{$user_lastname}', ";
				                $query .="user_role   =  '{$user_role}', ";
				                $query .="username = '{$username}', ";
				                $query .="user_email = '{$user_email}', ";
				                $query .="user_password   = '{$user_password}' ";
				                $query .= "WHERE user_id = {$the_user_id} ";


				                $edit_user_query = mysqli_query($connection,$query);

				                confirmQuery($edit_user_query);


				                echo "User Updated" . " <a href='../admin/users.php'>View Users?</a>";

			                }

		                }

	                } else {  // Redirects to home page is the user id is blank
		                header("Location: index.php");
	                }
	                ?>

                    <form action="" method="post" enctype="multipart/form-data">

                        <div class="form-group">
                            <label for="title">Firstname</label>
                            <input type="text" value="<?php echo $user_firstname; ?>" class="form-control" name="user_firstname">
                        </div>

                        <div class="form-group">
                            <label for="post_status">Lastname</label>
                            <input type="text" value="<?php echo $user_lastname; ?>" class="form-control" name="user_lastname">
                        </div>

                        <div class="form-group">
                            <select name="user_role" id="">
                                <option value="subscriber"><?php echo $user_role; ?></option>
				                <?php
				                // If the user is an admin it will display subscriber as an option to change to, not both, and vice versa.
				                if($user_role == 'admin') {
					                echo "<option value='subscriber'>subscriber</option>";
				                } else {
					                echo "<option value='admin'>admin</option>";
				                }
				                ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="post_tags">Username</label>
                            <input type="text" value="<?php echo $username; ?>" class="form-control" name="username">
                        </div>

                        <div class="form-group">
                            <label for="post_content">Email</label>
                            <input type="email" value="<?php echo $user_email; ?>" class="form-control" name="user_email">
                        </div>

                        <div class="form-group">
                            <label for="post_content">Password</label>
                            <input type="password" value="<?php echo $user_password; ?>" class="form-control" name="user_password">
                        </div>

                        <div class="form-group">
                            <input class="btn btn-primary btn-entice" type="submit" name="edit_user" value="Edit User">
                        </div>

                    </form>


                </div>
            </div>
        </div>



        <div class="row">
            <div class="col-md-12">
                <footer>
					<?php require 'footer.php'; ?>
                </footer>
            </div>
        </div>

    </div> <!--/container-fluid -->
</div> <!--/home-container -->
</body>


