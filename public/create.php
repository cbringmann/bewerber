<?php  include "includes/db.php"; ?>
<?php  include "includes/header.php"; ?>

<?php

    checkIfUserIsLoggedInAndRedirect('/login.php');

    echo $_SESSION['username'];

?>

<!-- Navigation -->
<?php  include "includes/navigation.php"; ?>

    <div class="container mt-3">
        <div class="form-group mb-3">
            <label for="exampleFormControlInput1" class="form-label">Title</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="form-group mb-3">
            <label for="exampleFormControlInput1" class="form-label">Link zum Bild</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="form-group mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Text</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="form-group">
            <input name="create" class="btn btn-lg btn-primary btn-block" value="Create" type="submit">
        </div>
    </div>



    <!-- Footer -->
<?php  include "includes/footer.php"; ?>