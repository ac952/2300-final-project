<?php
include('includes/init.php');
$current_page_id = "logout";
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
  <?php include("includes/header.php");?>

  <div id="logout-wrap">
    <h1>Log Out</h1>
    <?php
    print_messages();
    ?>
  </div>

  <?php include( "includes/footer.php" ); ?>
</body>
</html>
