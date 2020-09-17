<?php include("path.php"); ?>

<?php include(ROOT_PATH . "/controllers/users.php"); ?>

<?php include(ROOT_PATH . "/includes/_header.php"); ?>


<?php include(ROOT_PATH . "/includes/_navigation.php"); ?>

<div class="row comment-respond">
  <div id="respond" class="column">
    <div class="auth-content">
      <h3>Register</h3>
      <form action="register.php" method="post">

        <?php include(ROOT_PATH . "/helpers/formErrors.php"); ?>

        <fieldset>

          <div class="form-field">
            <label>Username</label>
            <input type="text" name="username" class="h-full-width" value="<?php echo $username; ?>" class="text-input">
          </div>
          <div class="form-field">
            <label>Email</label>
            <input type="email" name="email" class="h-full-width" value="<?php echo $email; ?>" class="text-input">
          </div>
          <div class="form-field">
            <label>Password</label>
            <input type="password" name="password" class="h-full-width" value="<?php echo $password; ?>" class="text-input">
          </div>
          <div>
            <label class="form-field">Password Confirm</label>
            <input type="password" name="passwordConf" class="h-full-width" value="<?php echo $passwordConf; ?>" class="text-input">
          </div>
          <div>
            <button type="submit" name="register-btn" class="btn btn-big h-full-width">Register</button>
          </div>
          <p>Or <a href="<?php echo BASE_URL . '/login.php' ?>">Sign In</a></p>

        </fieldset>

      </form>
    </div>
  </div>
</div>


<?php include(ROOT_PATH . "/includes/_footer.php"); ?>