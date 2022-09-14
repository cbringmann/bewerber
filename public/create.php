<?php  include "includes/db.php"; ?>
<?php  include "includes/header.php"; ?>

<?php

    checkIfUserIsLoggedInAndRedirect('/login.php');

    echo $_SESSION['username'];

    if(isset($_POST['create-form'])) {

        $post_title = $_POST['post_title'];
        $post_image = $_POST['post_image'];
        $post_content = $_POST['post_content'];
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