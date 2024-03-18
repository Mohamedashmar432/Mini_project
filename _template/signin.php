<?php
ob_start();
if ($_POST['username'] != null && $_POST['password'] != null && !empty($_POST['username']) && !empty($_POST['password'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $result = user::login($username, $password);
  if ($result) {
    header('Location:index.php');
    exit;
  } else {
?><script>
      alert("user doesn't exist")
    </script> <?php
            }
          } else {
              ?>

  <main class="form-signin w-100 m-auto">
    <form method="post" action="<?php $_SERVER["PHP_SELF"]; ?>">
      <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
      <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

      <div class="form-floating">
        <input type="text" class="form-control" id="floatingInput" placeholder="username" name="username">
        <label for="floatingInput">Username</label>
      </div>
      <div class="form-floating">
        <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
        <label for="floatingPassword">Password</label>
      </div>

      <div class="form-check text-start my-3">
        <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
        <label class="form-check-label" for="flexCheckDefault">
          Remember me
        </label><br>
        <a href="main.signup.php" class="lined-link to-signup-link">Create new account</a>
      </div>
      <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>

    </form>

  <?php
          }
          ob_end_flush();
  ?>