<?php
include('includes/init.php');
$current_page_id = "login";
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all" />

  <title id = "loginheader">Login</title>
</head>

<body>
  <?php include("includes/header.php");?>

  <div id="login-wrap">

  <h1 class = "page_header">Login</h1>

  <?php
  // print_messages();
  ?>

    <?php
    // if ($current_user) {
    //   echo "Logged in as $current_user";
    // } else {
    if (!isset($_POST['login'])) {
      //show form
      ?>

      <form id="circleklogin" action="login.php" method="post">
        <ul>
          <li>
            <label>Username:</label>
            <input type="text" name="username" required/>
          </li>
          <li>
            <br>
            <label>Password:</label>
            <input type="password" name="password" required/>
          </li>
          <li>
            <br>
            <button name="login" type="submit">Log In!</button>
          </li>
        </ul>
      </form>
      <?php
    }  else {
      print_messages();
    }
      ?>
  </div>

  <?php include( "includes/footer.php" ); ?>
</body>
</html>
