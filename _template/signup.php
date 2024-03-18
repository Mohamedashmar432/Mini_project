<?php
if ($_POST['username'] != null && $_POST['password'] != null && $_POST['email'] != null && !empty($_POST['password'])) {
  $username = $_POST["username"];
  $password = $_POST["password"];
  $email = $_POST["email"];
  $result = user::signup($username, $password, $email);
  if ($result) {
    header('Location:main.php');
    exit;
  } else { ?> <script>
      alert("something went wrong try again.")
    </script> <?php
            }
          } else {
              ?>

  <main class="form-signup w-100 m-auto">
    <form method="post" action=" <?php echo  $_SERVER["PHP_SELF"]; ?>">
      <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
      <h1 class="h3 mb-3 fw-normal">Please sign up</h1>
      <div class="form-floating">
        <input type="text" class="form-control" id="floatingInput" placeholder="Username" name="username">
        <label for="floatingInput">Username</label>
      </div>
      <div class="form-floating">
        <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
        <label for="floatingPassword">Password</label>
      </div>
      <div class="form-floating">
        <input type="email" class="form-control" id="floatingemail" placeholder="name@example.com" name="email">
        <label for="floatingInput">Email address</label>
      </div>

      <div class="form-check text-start my-3">
        <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
        <label class="form-check-label" for="flexCheckDefault">
          Remember me
        </label><br>
        <a href="main.signin.php" class="lined-link to-signup-link">Already have account</a>
      </div>
      <button class="btn btn-primary w-100 py-2" type="submit">Sign up</button>

    </form>
  <?php
          }

  ?>