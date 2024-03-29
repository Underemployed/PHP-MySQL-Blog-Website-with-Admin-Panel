<?php 
include 'partials/header.php';


//featured
$featured_query="SELECT * FROM posts WHERE is_featured=1";
$featured_result=mysqli_query($connection,$featured_query);
$featured=mysqli_fetch_assoc($featured_result);

//fetch 9post


$query="SELECT * FROM posts ORDER BY date_time DESC";
$posts=mysqli_query($connection,$query);


?>
    <section class="search__bar">
        <form  class="container search__bar-container" action="<?=ROOT_URL?>search.php" method="GET">
            <div>
                <i class="uil uil-search"></i>
                <input type="search" name="search" placeholder="Search">
                <button type="submit" name = "submit" class="btn">Go</button> 
            </div>
            
        </form>
        

    </section>
    
    
    <!-- ===================END OF SEARCH================-->
<!-- #region POSTS -->

<section class="posts <?= $featured ? '' : 'section__extra-margin' ?>">
  <div class="container posts__container">
    <?php while ($post = mysqli_fetch_assoc($posts)) : ?>
      <article class="post">
        <div class="post__thumbnail" style="width: 300px; height: 200px;">
          <img src="./images/<?= $post['thumbnail'] ?>" >
        </div>
        <div class="post__info">
          <?php // fetch category from categories using category_id
          $category_id = $post['category_id'];
          $category_query = "SELECT * FROM categories WHERE id=$category_id";
          $category_result = mysqli_query($connection, $category_query);
          $category = mysqli_fetch_assoc($category_result);
          ?>
          <a href="<?= ROOT_URL ?>category-posts.php?id=<?= $post['category_id'] ?>" class="category__button"><?= $category['title'] ?></a>
          <h2 class="post__title"><a href="<?= ROOT_URL ?>post.php?id=<?= $post['id'] ?>"><?= $post['title'] ?></a></h2>
          <a href="<?= ROOT_URL ?>post.php?id=<?= $post['id'] ?>">

            <p class="post__body" style="min-height: 100px;">
              <?= substr(html_entity_decode($post['body']), 0, 120) ?>...
            </p>
          </a>

          <div class="post__author">
            <?php
            // Fetch author from users table using author id
            $author_id = $post['author_id'];
            $author_query = "SELECT * FROM users WHERE id=$author_id";
            $author_result = mysqli_query($connection, $author_query);
            $author = mysqli_fetch_assoc($author_result);
            $author_firstname = $author['firstname'];
            $author_lastname = $author['lastname'];
            ?>
            <div class="post__author-avatar">
              <img src="./images/<?= $author['avatar'] ?>" alt="" />
            </div>
            <div class="post__author-info">
              <h5>By: <?= "{$author_firstname} {$author_lastname}" ?></h5>
              <small><?= date("M d, Y - H:i", strtotime($post['date_time'])) ?></small>
            </div>
          </div>
        </div>
      </article>
    <?php endwhile; ?>
  </div>
</section>



    <!--=====================================================================
    ==========================END OF THE POSTS===============================
  =================================================================== -->
  <section class="category__buttons">
    <div class="container category__buttons-container">
        <?php 
        $all_categories_query="SELECT * FROM categories ";
        $all_categories_result=mysqli_query($connection,$all_categories_query);

        ?>
        <?php while ( $category=mysqli_fetch_assoc($all_categories_result) ) : ?>
        <a href="<?=ROOT_URL?>category-posts.php?id=<?=$category['id']?>" class="category__button"><?=$category['title']?></a>
        <?php endwhile?>
    </div>
  </section>
  <!--=======================END OF CATEGORY ===================================-->
<?php
include './partials/footer.php';
?>


