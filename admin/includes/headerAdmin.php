<?php

include_once "../Classes/Categories.php";
$categ = new Categories();
$categories = $categ->readAll();

?>

<nav id="sidebarMenu" class="sidebar d-md-block bg-primary text-white collapse" data-simplebar>
    <div class="sidebar-inner px-4 pt-3">
        <div class="user-card d-flex d-md-none align-items-center justify-content-between justify-content-md-center pb-4">
            <div class="d-flex align-items-center">
                <div class="user-avatar lg-avatar mr-4">
                    <img src="assets/img/team/profile-picture-3.jpg"
                         class="card-img-top rounded-circle border-white" alt="Bonnie Green">
                </div>
                <div class="d-block">
                    <h2 class="h6">Hi, <?php echo $user['first_name'] ?></h2>
                    <a href="pages/examples/sign-in.html" class="btn btn-secondary text-dark btn-xs"><span
                                class="mr-2"><span class="fas fa-sign-out-alt"></span></span>Sign Out</a>
                </div>
            </div>
            <div class="collapse-close d-md-none">
                <a href="#sidebarMenu" class="fas fa-times" data-toggle="collapse"
                   data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="true"
                   aria-label="Toggle navigation"></a>
            </div>
        </div>
        <ul class="nav flex-column">
            <?php if ($user['type'] === "admin") : ?>
                <li class="nav-item ">
                    <a href="users.php" class="nav-link">
                        <span class="sidebar-icon"><span class="fas fa-user-alt"></span></span>
                        <span>Users</span>
                    </a>
                </li>
            <?php endif; ?>
            <?php if ($user['type'] === "admin") : ?>
                <li class="nav-item ">
                    <a href="categories.php" class="nav-link">
                        <span class="sidebar-icon"><span class="fas fa-book"></span></span>
                        <span>Categories</span>
                    </a>
                </li>
            <?php endif; ?>
            <li class="nav-item ">
                <a href="dashboard.php" class="nav-link">
                    <span class="sidebar-icon"><span class="fas fa-cog"></span></span>
                    <span>Profile</span>
                </a>
            </li>
            <li class="nav-item">
          <span class="nav-link  collapsed  d-flex justify-content-between align-items-center" data-toggle="collapse"
                data-target="#submenu-pages">
            <span>
              <span class="sidebar-icon"><span class="far fa-file-alt"></span></span>
Articles
</span>
            <span class="link-arrow"><span class="fas fa-chevron-right"></span></span>
          </span>
                <div class="multi-level collapse " role="list" id="submenu-pages" aria-expanded="false">
                    <ul class="flex-column nav">
                        <?php foreach ($categories as $item) : ?>
                            <li class="nav-item">
                                <a class="nav-link"
                                   href="articles.php?id=<?php echo $item['id'] ?>&name=<?php echo $item['name'] ?>">
                                    <span><?php echo $item['name'] ?></span>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </li>
            <li role="separator" class="dropdown-divider mt-4 mb-3 border-black"></li>
        </ul>
    </div>
</nav>