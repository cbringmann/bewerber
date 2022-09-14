<?php  include "includes/db.php"; ?>
<?php  include "includes/header.php"; ?>

<?php

    checkIfUserIsLoggedInAndRedirect('/login.php');

    echo $_SESSION['username'];

    if(isset($_POST['create-form'])) {

        $post_title = $_POST['post_title'];
        $post_image = $_POST['post_image'];
        $post_content = $_POST['post_content'];

        if (!empty($post_title) && !empty($post_content)) {

            $query = "INSERT INTO post (post_id, post_title, post_author, post_date, post_image, post_content)";
            $query .= "VALUES ($the_post_id ,'{$comment_author}', '{$comment_email}', '{$comment_content }', 'unapproved',now())";

            $create_comment_query = mysqli_query($conn, $query);

            if (!$create_comment_query) {
                die('QUERY FAILED' . mysqli_error($conn));
            }

            header("Location: ../index.php");

        }


    }

?>

<!-- Navigation -->
<?php  include "includes/navigation.php"; ?>

    <div class="container mt-3">
        <form id="create-form" role="form" autocomplete="off" class="form" method="post">
            <div class="form-group mb-3">
                <label for="exampleFormControlInput1" class="form-label">Title</label>
                <input name="post_title" type="text" class="form-control" id="exampleFormControlInput1" >
            </div>
            <div class="form-group mb-3">
                <label for="exampleFormControlInput1" class="form-label">Link zum Bild</label>
                <input name="post_image" type="text" class="form-control" id="exampleFormControlInput2" >
            </div>
            <div class="form-group mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Text</label>
                <textarea name="post_content" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="form-group">
                <input name="create" class="btn btn-lg btn-primary btn-block" value="Create" type="submit">
            </div>
        </form>
    </div>



    <!-- Footer -->
<?php  include "includes/footer.php"; ?>