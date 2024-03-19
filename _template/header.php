<?php include_once '../libs/user.class.php'; ?>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">BuzHub</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./main.buyer.php">Buyer</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./main.seller.php">Seller</a>
        </li>
        <li class="nav-item dropdown">
          <?php if (isset($_SESSION['username'])) {
            $user = $_SESSION['username'];
          ?>
            <a class="nav-link1 dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <?php echo $user; ?>
            </a>
          <?php } else { ?>
            <a class="nav-link1 dropdown-toggle" href="./main.signin.php">signin</a><?php } ?>

          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li><a class="dropdown-item" href="index.php?logout" <?php user::logout(); ?>>Logout</a></li>

          </ul>

        </li>
      </ul>
    </div>
  </div>
</nav>