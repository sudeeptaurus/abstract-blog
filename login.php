<?php include("path.php");  ?>

<?php include(ROOT_PATH . "/controllers/users.php"); ?>

<?php include(ROOT_PATH . "/includes/_header.php"); ?>


<?php include(ROOT_PATH . "/includes/_navigation.php"); ?>

<div class="row comment-respond">
  <div id="respond" class="column">
    <div class="auth-content">
      <h3>Login</h3>
      <form action="login.php" method="post">

        <?php include(ROOT_PATH . "/helpers/formErrors.php"); ?>

        <fieldset>
          <div class="form-field">
            <label>Username</label>
            <input type="text" name="username" value="<?php echo $username; ?>" class="h-full-width text-input">
          </div>

          <div class="form-field">
            <label>Password</label>
            <input type="password" name="password" value="<?php echo $password; ?>" class="h-full-width text-input">
          </div>
          <div>
            <button type="submit" name="login-btn" class="btn btn-big h-full-width">Login</button>
          </div>
          <p>Or <a href="<?php echo BASE_URL . '/register.php' ?>">Sign Up</a></p>
        </fieldset>
      </form>
    </div>
  </div>
</div>

<?php include(ROOT_PATH . "/includes/_footer.php"); ?>