<?php
  require_once('config/config.php');
  require_once('config/db.php');
  
  
  // will check if submit
  if (isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
  
    //will get information of username and password from account table in database
    $query_db = "SELECT * FROM account WHERE username = '$username' AND password = '$password'";
  
   
    $query = mysqli_query($conn, $query_db); 
    //check if there is any rows 
    if (mysqli_num_rows($query) > 0) {
      //to fetch all the rows
      define('MYSQLI_ASSOC', MYSQLI_ASSOC);
      $user_acc = mysqli_fetch_all($query, MYSQLI_ASSOC);
    } else {
      $user_acc = false;
    }
  
    //condition if the logging in is successful or not
    if ($user_acc) {
      header('Location: guestbook-list.php');
    } else {
      echo '
          <div class="invalid" style="border: 1px solid #e6b2b2; margin: 10px auto; padding: 5px 50px; background-color: #f2dede; max-width: 800px; text-align: center; color: #E61b09; font-weight: bold;">
            Logging in could not be completed. You entered an invalid username or password.
          </div>';
    }
  }

?>
<?php include('inc/header.php'); ?>
  <br/>
  <div style="width:30%; margin: auto; text-align: center;">
    <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>" class="form-signin">
      <img class="mb-4" src="img/bootstrap.svg" alt="" width="100" height="100">
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
      <label for="inputEmail" class="sr-only">Username</label>
      <input type="text" id="username" name="username" class="form-control" placeholder="Username" required="" autofocus="">
      <br/><label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="password" name="password" class="form-control" placeholder="Password" required="">
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button type="submit" name="submit" value="Submit" class="btn btn-lg btn-primary btn-block">Sign in</button>

    </form>
  </div>
<?php include('inc/footer.php'); ?>