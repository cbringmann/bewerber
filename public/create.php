<?php  include "includes/db.php"; ?>
<?php  include "includes/header.php"; ?>

<?php

    checkIfUserIsLoggedInAndRedirect('/login.php');

echo $_SESSION['username'];

?>

<!-- Navigation -->
<?php  include "includes/navigation.php"; ?>

    <div class="container">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
    </div>



    <!-- Footer -->
<?php  include "includes/footer.php"; ?>