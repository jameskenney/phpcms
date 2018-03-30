<?php
/**
 * Created by James Kenney.
 * User: James
 * Date: 3/25/2018
 * Time: 9:34 PM
 */
?>




<aside class="sidebar">
    <h3>The Sidebar</h3>
    <p>The sidebar typically contains things like a menu:</p>

    <!-- Blog Search Well - Sends user to search.php after search -->
    <div class="well">
        <h4>Blog Search</h4>
        <form action="search.php" method="post">
        <div class="input-group">
            <input name="search" type="text" class="form-control">
            <span class="input-group-btn">

			<button name="submit" class="btn btn-default" type="submit">
				<span class="glyphicon glyphicon-search"></span>
			</button>
		</span>
        </div>
        </form> <!-- /Search Form -->
    </div>


    <ul>
        <li><a href="login.php">login</a></li>
        <li><a href="admin/exit.php">logout</a></li>
        <li><a href="admin/register.php">register user</a></li>
        <li><a href="admin/user-rolls.php">add/remove user roles</a></li>
        <li><a href="admin/delete-users.php">delete user</a></li>
        <li><a href="admin/change-password.php">change password</a></li>
        <li><a href="admin/change-email.php">change email</a></li>
        <li><a href="admin/login-as.php">login as</a></li>
        <li><a href="admin/"></a></li>
    </ul>
</aside>
