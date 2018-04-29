<?php include('includes/init.php');

$current_page_id = "edit_events";

if (isset($_POST["submit_changes"])) {
  $event_name = filter_input(INPUT_POST, 'event_name', FILTER_SANITIZE_STRING);
  $event_month = filter_input(INPUT_POST, 'event_month', FILTER_VALIDATE_INT);
  $event_date = filter_input(INPUT_POST, 'event_date', FILTER_VALIDATE_INT);
  $event_year = filter_input(INPUT_POST, 'event_year', FILTER_VALIDATE_INT);
  $event_time = filter_input(INPUT_POST, 'event_time', FILTER_SANITIZE_STRING);
  $location = filter_input(INPUT_POST, 'location', FILTER_SANITIZE_STRING);
  $description = filter_input(INPUT_POST, 'description', FILTER_SANITIZE_STRING);
  
  }

?>

<!DOCTYPE html>
<html lang ="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all" />
  <title>Edit Events</title>
</head>
<body>
  <?php include("includes/header.php");?>
  <h1>Edit Event </h1>
    <!-- get the info from db based on selected cell id-->
    <!-- echo inside input -->
    <form id="event" action="events.php" method="post">
      <ul>
        <li>
          <label>Event Name:</label>
          <input type="text" name="event_name"/>
        </li>
        <li>
          <label>Date:</label>
          <input type="number" name="event_month" placeholder="MM" />/
          <input type="number" name="event_date" placeholder="DD" />/
          <input type="number" name="event_year" placeholder="YYYY" />
        </li>
        <li>
          <label>Time:</label>
          <input type="text" name="event_time" placeholder="format: 4:00pm" />
        </li>
        <li>
          <label>Location:</label>
          <input type="text" name="location" />
        </li>
        <li>
          <label>Description:</label>
        </li>
        <li>
          <textarea name="description" cols="40" rows="5"></textarea>
        </li>
        <li>
          <button name="submit_changes" type="submit">Update Changes</button>
        </li>
      </ul>
    </form>

  <?php include("includes/footer.php");?>

</body>
</html>
