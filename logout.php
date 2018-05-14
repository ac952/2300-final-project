<?php
include('includes/init.php');
$current_page_id = "logout";

log_out();
if (!$current_user) {
  record_message("You've been successfully logged out.");
}
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all" />

  <title>Logout</title>
</head>

<body>
  <article>
  <?php include("includes/header.php");?>

  <div id="content-wrap">

  <div id="logout-wrap">
    <h1>Log Out</h1>
    <?php
    print_messages();
    ?>
  </div>

</div>
<?php include( "includes/footer.php" ); ?>
</article>
</body>
</html>
