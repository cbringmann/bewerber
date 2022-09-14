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

</div>

<!-- Footer -->
<?php  include "includes/footer.php"; ?>