<header class="p-3 text-bg-dark">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-left mb-md-0">
                <li><a href="#" class="nav-link px-2 text-white">Bloglogo</a></li>
                <li><a href="#" class="nav-link px-2 text-white">Blog NAME</a></li>
            </ul>

        </div>
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-left mb-md-0">
                <li><a href="#" class="nav-link px-2 text-secondary">Übersicht</a></li>
                <li><a href="#" class="nav-link px-2 text-white">Neuer Eintrag</a></li>
                <li><a href="#" class="nav-link px-2 text-white">Impressum</a></li>
            </ul>

            <div class="text-end">
                <?php if(isLoggedIn()): ?>
                    <li>
                        <a href="/cms/admin">Admin</a>
                    </li>

                    <li>
                        <a href="/cms/includes/logout.php">Logout</a>
                    </li>
                <?php else: ?>
                    <li>
                        <a href="/cms/login.php">Login</a>
                    </li>
                <?php endif; ?>
            </div>

                <a href="/login.php"><button type="button" class="btn btn-outline-light me-2">Login</button></a>
                <button type="button" class="btn btn-warning">Sign-up</button>

        </div>
    </div>
</header>