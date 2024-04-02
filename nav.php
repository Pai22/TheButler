<nav class="navbar fixed" style="background-color: #FFF;">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"><i class="bi bi-house-door-fill"></i></a>
    <h1 style="text-align: center; color:#C6824B ">The Butler</h1>

    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <?php echo $_SESSION['username']; ?> <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">
              <i class="bi bi-house-door"></i>
              Homepage
            </a>
          </li>
          <?php
          if (isset($_SESSION['id']) && $_SESSION['role'] == 'a') { ?>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="room.php">
                <i class="bi bi-houses-fill me-2"></i>
                Room
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="logout.php">
                <i class="bi bi-power me-2"></i>
                Logout
              </a>
            </li>

          <?php } elseif (isset($_SESSION['id']) && $_SESSION['role'] == 's') { ?>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">
                <i class="bi bi-building-fill-gear me-2"></i>
                Service
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="logout.php">
                <i class="bi bi-power me-2"></i>
                Logout
              </a>
            </li>
            
          <?php } elseif (isset($_SESSION['id']) && $_SESSION['role'] == 'm') { ?>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="account.php">
                <i class="bi bi-person-circle me-2"></i>
                Account
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="myroom.php">
                <i class="bi bi-house-heart me-2"></i>
                My Room
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="logout.php">
                <i class="bi bi-power me-2"></i>
                Logout
              </a>
            </li>

          <?php } ?>
        </ul>
      </div>

    </div>
  </div>
</nav>