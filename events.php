<?php include('includes/init.php');

$current_page_id = "events";

// Get the list of events from the database.
$events = exec_sql_query($db, "SELECT DISTINCT event_name FROM events", NULL)->fetchAll(PDO::FETCH_COLUMN);

if (isset($_POST["submit_insert"])) {
  $event_name = filter_input(INPUT_POST, 'event_name', FILTER_SANITIZE_STRING);
  $event_month = filter_input(INPUT_POST, 'event_month', FILTER_VALIDATE_INT);
  $event_date = filter_input(INPUT_POST, 'event_date', FILTER_VALIDATE_INT);
  $event_year = filter_input(INPUT_POST, 'event_year', FILTER_VALIDATE_INT);
  $event_time = filter_input(INPUT_POST, 'event_time', FILTER_SANITIZE_STRING);
  $location = filter_input(INPUT_POST, 'location', FILTER_SANITIZE_STRING);
  $description = filter_input(INPUT_POST, 'description', FILTER_SANITIZE_STRING);

  $invalid_review = TRUE;

  if ( !in_array($event_name, $events) ) {
    $invalid_review = FALSE;
  }

  // regex
  // if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
  //     $nameErr = "Only letters and white space allowed";
  //   }

  if ($invalid_review) {
    array_push($messages, "Failed to add event.");
      // var_dump("no");
  } else {

    $sql = "INSERT INTO events (event_name, event_month, event_date ,
      event_year, event_time, location, description)
    VALUES (:event_name, :event_month, :event_date,:event_year,
       :event_time, :location, :description)";
    $params = array(
      ':event_name' => $event_name,
      ':event_month' => $event_month,
      ':event_date' => $event_date,
      ':event_year' => $event_year,
      ':event_time' => $event_time,
      ':location' => $location,
      ':description' => $description
    );

    $result = exec_sql_query($db, $sql, $params);
    if ($result) {
      array_push($messages, "Your event has been added.");
    } else {
      array_push($messages, "Failed to add event.");
    }
  }
}
?>

<?php
function print_event($record) {
  ?>
  <tr>
    <td><?php echo htmlspecialchars($record["event_name"]);?></td>
    <td><?php echo htmlspecialchars($record["event_month"]);
    ?>/<?php echo htmlspecialchars($record["event_date"]);
    ?>/<?php echo htmlspecialchars($record["event_year"]);?></td>
    <td><?php echo htmlspecialchars($record["event_time"]);?></td>
    <td><?php echo htmlspecialchars($record["location"]);?></td>
    <td><?php echo htmlspecialchars($record["description"]);?></td>
    <td>
      <form id="editevent" action="edit_events.php" method="post">
        <button name="submit_edit" type="submit">Edit</button>
      </form>
    </td>
  </tr>
  <?php
}
?>

<!DOCTYPE html>
<html lang ="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all" />
  <title>Events</title>
</head>
<body>
  <?php include("includes/header.php");?>
  <h1 class = "page_header">Events</h1>
  <div id="content-wrap">

    <?php
    $sql = "SELECT * FROM events";
    $params = array();
    $records = exec_sql_query($db, $sql, $params)->fetchAll();
    ?>
      <table>
        <tr>
          <th>Event Name</th>
          <th>Date</th>
          <th>Time</th>
          <th>Location</th>
          <th>Description</th>
        </tr>
        <?php
        foreach($records as $record) {
          print_event($record);
        }
        ?>
      </table>


    <h2>Add an Event</h2>
    <form id="addevent" action="events.php" method="post">
      <ul>
        <li>
          <label>Event Name:</label>
          <input type="text" name="event_name" required/>
        </li>
        <li>
          <label>Date:</label>
          <input type="number" name="event_month" placeholder="MM" required/>/
          <input type="number" name="event_date" placeholder="DD" required/>/
          <input type="number" name="event_year" placeholder="YYYY" required/>
        </li>
        <li>
          <label>Time:</label>
          <input type="text" name="event_time" placeholder="format: 4:00pm" required/>
        </li>
        <li>
          <label>Location:</label>
          <input type="text" name="location" required/>
        </li>
        <li>
          <label>Description:</label>
        </li>
        <li>
          <textarea name="description" cols="40" rows="5"></textarea>
        </li>
        <li>
          <button name="submit_insert" type="submit">Add Event</button>
        </li>
      </ul>
    </form>
  </div>

  <?php include("includes/footer.php");?>

</body>
</html>
