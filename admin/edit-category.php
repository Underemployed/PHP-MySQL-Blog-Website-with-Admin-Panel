<?php
include "partials/header.php";
if(!isset($_SESSION['user_is_admin'])){
    header("location: " . ROOT_URL . "logout.php");
    //destroy all sessions and redirect user to login page
    session_destroy();
}
if(isset($_GET['id'])){
    $id=filter_var($_GET['id'],FILTER_SANITIZE_NUMBER_INT);

    // fetch category from database
    $query="SELECT * FROM categories WHERE id=$id";
    $result=mysqli_query($connection,$query);
    if(mysqli_num_rows($result)==1){
        $category = mysqli_fetch_assoc($result);
    }


}else{
    header("location: " . ROOT_URL . "admin/manage-categories.php");
    die();
}
?>


<section class="form__section">

    <div class="container form__section-container" >
        <h2>Edit Category</h2>
        <form action="<?= ROOT_URL ?>admin/edit-category-logic.php" method="POST">
           <input type="hidden"  name="id" value="<?=$category['id']?>">
            <input type="text"  name="title" value="<?=$category['title']?>" placeholder="Title">
            <textarea  rows="4" name="description" placeholder="Description"><?=$category['description']?></textarea>

            <button type="submit" name ="submit" class="btn">Update Category</button>
        </form>
    </div>


    

</section>

<?php
include "../partials/footer.php";
?>