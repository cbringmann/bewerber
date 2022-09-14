<?php  include "includes/db.php"; ?>
<?php  include "includes/header.php"; ?>

<!-- Navigation -->
<?php  include "includes/navigation.php"; ?>

<!-- Content -->
<div class="container">

    <?php if(isLoggedIn()): ?>
        <h>HELLO THERE LOGGED IN!</h>
    <?php else: ?>
        <h>HELLO THERE!</h>
    <?php endif; ?>

    <?php
    global $conn;
    $query = "SELECT * FROM posts";
    $select_all_posts_query = mysqli_query($conn,$query);

while($row = mysqli_fetch_assoc($select_all_posts_query)) {

    $post_title = $row['post_title'];
    $post_author = $row['post_user'];
    $post_date = $row['post_date'];
    $post_image = $row['post_image'];
    $post_content = substr($row['post_content'],0,400);

    ?>

    <div class="container">
        <!-- START THE FEATURETTES -->

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h4 class="featurette-heading fw-normal lh-1">HEUTE, 14:11h - <span class="text-muted"><?php echo $post_title ?></span></h4>
                <p class="lead"><?php echo $post_content ?>.</p>
                <p class="author"><?php echo $post_author ?></p>
            </div>
            <div class="col-md-5">
                <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="200" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h4 class="featurette-heading fw-normal lh-1">HEUTE, 16:11h - <span class="text-muted">Title2</span></h4>
                <p class="lead">And yes, this is the last block of representative placeholder content. Again, not really intended to be actually read, simply here to give you a better view of what this would look like with some actual content. Your content.</p>
            </div>
            <div class="col-md-5">
                <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="200" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>

            </div>
        </div>

    </div>


</div>

<!-- Footer -->
<?php  include "includes/footer.php"; ?>