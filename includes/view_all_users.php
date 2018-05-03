<?php
/**
 * Created by James Kenney.
 * User: James
 * Date: 4/22/2018
 * Time: 6:45 PM
 */
?>
<?php require( '../admin/db.php' );?>
<?php require( '../includes/head.php' ); ?>

<body>
<div class="home-container"
<div class="container-fluid">
    <?php require 'navigation.php'; ?>
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Username</th>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Email</th>
                        <th>Role</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php

                    $query = "SELECT * FROM users_new";
                    $select_users = mysqli_query($connection,$query);
                    while($row = mysqli_fetch_assoc($select_users)) {
                        $user_id             = escape($row['user_id']);
                        $username            = escape($row['username']);
                        $user_password       = escape($row['user_password']);
                        $user_firstname      = escape($row['user_firstname']);
                        $user_lastname       = escape($row['user_lastname']);
                        $user_email          = escape($row['user_email']);
                        $user_image          = escape($row['user_image']);
                        $user_role           = escape($row['user_role']);

                        echo "<tr>";
                        echo "<td>$user_id </td>";
                        echo "<td>$username</td>";
                        echo "<td>$user_firstname</td>";
                        echo "<td>$user_lastname</td>";
                        echo "<td>$user_email</td>";
                        echo "<td>$user_role</td>";
                        echo "<td><a href='../admin/users.php?change_to_admin={$user_id}'>Admin</a></td>";
                        echo "<td><a href='../admin/users.php?change_to_sub={$user_id}'>Subscriber</a></td>"
                        ;echo "<td><a href='users.php?source=edit_user&edit_user={$user_id}'>Edit</a></td>";
                        echo "<td><a href='users.php?delete={$user_id}'>Delete</a></td>";
                        echo "</tr>";

                    }
                    ?>
                    </tbody>
                </table>

                <?php

                    if(isset($_GET['change_to_admin'])) {
                        $the_user_id = $_GET['change_to_admin'];

                        $query = "UPDATE users_new SET user_role = 'admin' WHERE user_id = $the_user_id   ";
                        $change_to_admin_query = mysqli_query($connection, $query);
                        header("Location: users.php");



                    }

                    if(isset($_GET['change_to_sub'])){
                        $the_user_id = $_GET['change_to_sub'];

                        $query = "UPDATE users_new SET user_role = 'subscriber' WHERE user_id = $the_user_id   ";
                        $change_to_sub_query = mysqli_query($connection, $query);
                        header("Location: users.php");


                    }

                    if(isset($_GET['delete'])) {
                        $the_user_id = $_GET['delete'];

                        $query = "DELETE FROM users_new WHERE user_id = {$the_user_id}";
                        $delete_user_query = mysqli_query($connection, $query);
                        header("Location: users.php");



                    }
                    ?>
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
</div>
</body>


























