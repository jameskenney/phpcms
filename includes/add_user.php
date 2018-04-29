<?php
/**
 * Created by James Kenney.
 * User: James
 * Date: 4/8/2018
 * Time: 11:52 AM
 */
?>

<?php require( '../admin/config.php' );?>
<?php include( '../includes/head.php' ); ?>

<body>
    <div class="home-container">
        <div class="container-fluid">
            <?php require 'navigation.php'; ?>
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <h1>Adding new user</h1>
                        <?php
                        if(isset($_POST['create_user'])) {

                            $user_firstname    = $_POST['user_firstname'];
                            $user_lastname     = $_POST['user_lastname'];
                            $user_role         = $_POST['user_role'];
                            $username          = $_POST['username'];
                            $user_email        = $_POST['user_email'];
                            $user_password     = $_POST['user_password'];

                            $user_password = password_hash($user_password, PASSWORD_BCRYPT, array('cost' => 10));
                            $query = "INSERT INTO users_new(user_firstname, user_lastname, user_role,username,user_email,user_password) ";
                            $query .= "VALUES('{$user_firstname}','{$user_lastname}','{$user_role}','{$username}','{$user_email}', '{$user_password}') ";
                            $create_user_query = mysqli_query($connection, $query);

                            confirmQuery($create_user_query);

                            echo "User Created: " . " " . "<a href='../admin/users.php'>View Users</a> ";
                        }
                        ?>

                        <form action="" method="post" enctype="multipart/form-data">

                            <div class="form-group">
                                <label for="title">Firstname</label>
                                <input type="text" class="form-control" name="user_firstname">
                            </div>

                            <div class="form-group">
                                <label for="post_status">Lastname</label>
                                <input type="text" class="form-control" name="user_lastname">
                            </div>

                            <div class="form-group">
                                <select name="user_role" id="">
                                    <option value="subscriber">Select Options</option>
                                    <option value="admin">Admin</option>
                                    <option value="subscriber">Subscriber</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="post_tags">Username</label>
                                <input type="text" class="form-control" name="username">
                            </div>

                            <div class="form-group">
                                <label for="post_content">Email</label>
                                <input type="email" class="form-control" name="user_email">
                            </div>

                            <div class="form-group">
                                <label for="post_content">Password</label>
                                <input type="password" class="form-control" name="user_password">
                            </div>

                            <div class="form-group">
                                <input class="btn btn-primary btn-entice" type="submit" name="create_user" value="Add User">
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
