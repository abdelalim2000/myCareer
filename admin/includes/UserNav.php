<?php
$image = "storage/users/{$_SESSION['id']}.jpg";
if ($user['gender'] === "male") {
    $defaultImage = "storage/users/MaleAvatar.png";
} elseif ($user['gender'] === "female") {
    $defaultImage = "storage/users/femaleAvatar.png";
}

if (file_exists($image)) {
    $defaultImage = $image;
}
?>
<nav class="navbar navbar-top navbar-expand navbar-dashboard navbar-dark pl-0 pr-2 pb-0 mb-5">
    <div class="container-fluid px-0">
        <div class="d-flex justify-content-between w-100" id="navbarSupportedContent">
            <div class="d-flex">
            </div>
            <!-- Navbar links -->
            <ul class="navbar-nav align-items-center">
                <li class="nav-item dropdown">
                    <a class="nav-link pt-1 px-0" href="#" role="button" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        <div class="media d-flex align-items-center">
                            <img src="<?php echo $defaultImage; ?>"
                                 class="user-avatar md-avatar rounded-circle"
                                 alt="<?php echo $user['first_name'] ?>">
                            <div class="media-body ml-2 text-dark align-items-center d-none d-lg-block">
                                                <span class="mb-0 font-small font-weight-bold">
                                                    <?php echo "{$user['first_name']} {$user['last_name']}" ?>
                                                </span>
                            </div>
                        </div>
                    </a>
                    <div class="dropdown-menu dashboard-dropdown dropdown-menu-right mt-2">
                        <a class="dropdown-item font-weight-bold"
                           href="dashboard.php"><span
                                    class="far fa-user-circle"></span>My Profile</a>
                        <?php if ($_SESSION['type'] === "admin") : ?>
                            <a class="dropdown-item font-weight-bold" href="register.php"><span
                                        class="fas fa-cog"></span>Register User</a>
                            <a href="create_article.php" class="dropdown-item font-weight-bold">
                                <span class="fas fa-pen-alt"></span>Create Article</a>
                        <?php endif; ?>
                        <div role="separator" class="dropdown-divider"></div>
                        <a class="dropdown-item font-weight-bold" href="logout.php"><span
                                    class="fas fa-sign-out-alt text-danger"></span>Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>