<?php
include "partials/header.php";
?>


    <section class="dashboard">
        <div class="container dashboard__container">
    
            <button id="show__sidebar-btn" class="sidebar__toggle"><i class="uil uil-angle-right-b"></i></button>
            <button id="hide__sidebar-btn" class="sidebar__toggle"><i class="uil uil-angle-left-b"></i></button>
    
            <aside>
                <ul>
                    <li>
                        <a href="<?= ROOT_URL ?>admin/add-post.php">
                            <i class="uil uil-pen"></i>
                            <h5>Add Post</h5>
                        </a>
                    </li>                
                        
                    <li>
                        <a href="<?= ROOT_URL ?>admin/index.php">
                            <i class="uil uil-pen"></i>
                            <h5>Manage Posts</h5>
                        </a>
                    </li>
    
                    <li>
                        <a href="<?= ROOT_URL ?>admin/add-user.php">
                            <i class="uil uil-user-plus"></i> 
                            <h5>Add User</h5>
                        </a>
                    </li>  
    
                    <li>
                        <a href="<?= ROOT_URL ?>admin/manage-users.php" class="active">
                            <i class="uil uil-users-alt"></i>
                            <h5>Manage Users</h5>
                        </a>
                    </li>                    
                    <li>
                        <a href="<?= ROOT_URL ?>admin/add-category.php">
                            <i class="uil uil-edit"></i>
                            <h5>Add Category</h5>
                        </a>
                    </li>                    
                    <li>
                        <a href="<?= ROOT_URL ?>admin/manage-categories.php" >
                            <i class="uil uil-list-ul"></i>
                            <h5>Manage Categories</h5>
                        </a>
                    </li>
                </ul>
            </aside>
            <main>
                <h2>Manage Users</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Username</th>
                            <th>Edit</th>
                            <th>Delete</th>
                            <th>Admin</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td>Named Guy</td>
                            <td>Named </td>
                            <td><a href="<?= ROOT_URL ?>admin/edit-user.php" class="btn sm">Edit</a></td>
                            <td><a href="<?= ROOT_URL ?>admin/delete-category.php" class="btn sm danger">Delete</a></td>
                            <td>Yes</td>
                        <tr>
                            <td>Vinland Saga </td>
                            <td>Saga </td>
                            <td><a href="<?= ROOT_URL ?>admin/edit-user.php" class="btn sm">Edit</a></td>
                            <td><a href="<?= ROOT_URL ?>admin/delete-category.php" class="btn sm danger">Delete</a></td>
                            <td>No</td>
                        </tr>
                        <tr>
                            <td>Pikachu Guy</td>
                            <td>Guy </td>
                            <td><a href="<?= ROOT_URL ?>admin/edit-user.php" class="btn sm">Edit</a></td>
                            <td><a href="<?= ROOT_URL ?>admin/delete-category.php" class="btn sm danger">Delete</a></td>
                            <td>Yes</td>

                        </tr>
    
                    </tbody>
                </table>
            </main>
        </div>
    </section>
 
<?php
include "../partials/footer.php";
?>
    