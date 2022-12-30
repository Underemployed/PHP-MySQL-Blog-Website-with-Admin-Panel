<?php
include "partials/header.php";
?>

<section class="form__section">
    <div class="container form__section-container">
        <h2>Edit Post</h2>

        <form action="" enctype="multipart/form-data">
            <input type="text" placeholder="Title">
            <select >
                <option value="1">Wild Life</option>
                <option value="1">Music</option>
                <option value="1">Website</option>
                <option value="1">Movies</option>
                <option value="1">Travel</option>
                <option value="1">Science & Technology</option>
                <option value="1">Food</option>
            </select>
            <div class="form__control inline">
                <input type="checkbox" id="is_featured" checked>
                <label for="is_featured" >Featured</label>
            </div>
            <textarea  rows="8" placeholder="Body"></textarea>

            <div class="form__control">
                <label for="thumbnail">Change Thumbnail</label>
                <input type="file" id="thumbnail">
            </div>
            <button type="submit" class="btn">Update Post</button>
        </form>
    </div>
</section>

<?php
include "../partials/footer.php";
?>s