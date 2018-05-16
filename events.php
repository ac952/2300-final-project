<?php include('includes/init.php');

$current_page_id = "events";
$messages = array();
$date_messages = array();
// Get the list of events from the database.
$events = exec_sql_query($db, "SELECT DISTINCT event_name FROM events", NULL)->fetchAll(PDO::FETCH_COLUMN);

if (isset($_POST["submit_insert"])) {
  $event_name = filter_input(INPUT_POST, 'event_name', FILTER_SANITIZE_STRING);
  $event_time = filter_input(INPUT_POST, 'event_time', FILTER_SANITIZE_STRING);
  $location = filter_input(INPUT_POST, 'location', FILTER_SANITIZE_STRING);
  $description = filter_input(INPUT_POST, 'description', FILTER_SANITIZE_STRING);
  $event_date = filter_input(INPUT_POST, 'event_date', FILTER_SANITIZE_STRING);
  // $invalid_review = TRUE;
  $invalid_review = FALSE;
  if (preg_match("/^(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])-[0-9]{2}$/",$event_date)){
      $invalid_review = FALSE;
    }
    else {
      $invalid_review = TRUE;
  }

  if ($invalid_review) {
    // array_push($messages, "Failed to add event.");
    array_push($messages, "<h3 class='fail'>Failed to add event. *Fix your field inputs</h3>");
    array_push($date_messages, "*Enter date in proper format");
      // var_dump("no");
  } else {
    $sql = "INSERT INTO events (event_name, event_date, event_time,
      location, description)
    VALUES (:event_name,:event_date,:event_time, :location, :description)";
    $params = array(
      ':event_name' => $event_name,
      ':event_date' => $event_date,
      ':event_time' => $event_time,
      ':location' => $location,
      ':description' => $description
    );
    $result = exec_sql_query($db, $sql, $params);
    if ($result) {
      array_push($messages, "<h3 class='eventAdd'>Your event has been added!</h3>");
    } else {
      array_push($messages, "<h3 class='fail'>Failed to add event. *Fix your field inputs </h3>");
    }
  }
}
?>

<?php
// if click on delete, delete row in db by event name (make unique)
// var_dump('no');
if(isset($_GET['submit_delete'])){
  // var_dump($_POST['submit_delete']);
    // $id = $record['id'];
    $id = $_GET['submit_delete'];
    // $sql = "DELETE FROM events WHERE id = " . $record['id']. "";
    $sql = "DELETE FROM events WHERE id='$id'";
    $params = array();
    exec_sql_query($db, $sql, $params);
    array_push($messages, "<h3 class='fail'>Event has been deleted.</h3>");
}
?>

<?php
function print_event($record) {
  global $current_user;
  ?>
  <tr>
    <td><?php echo htmlspecialchars($record["event_name"]);?></td>
    <td><?php echo htmlspecialchars($record["event_date"]);?></td>
    <td><?php echo htmlspecialchars($record["event_time"]);?></td>
    <td><?php echo htmlspecialchars($record["location"]);?></td>
    <td><?php echo htmlspecialchars($record["description"]);?></td>

    <?php if($current_user) { ?>
    <td>
      <form action ="edit_events.php" method ="get">
        <button type="submit" value='<?php echo $record['id'] ?>'
          name="submit_edit">Edit</button>
      </form>
    </td>
    <td>
      <form action ="events.php" method ="get">
        <button type="submit" value='<?php echo $record['id'] ?>'
          name="submit_delete">Delete</button>
      </form>
    </td>
  <?php }?>
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
  <article>
  <?php include("includes/header.php");?>
  <div id="content-wrap">
    <?php
    foreach ($messages as $message){
        echo $message;
      }
      ?>

    <h1 id="page_header"> Events</h1>


    <?php
    // $msg=$_GET['message'];
    // echo $msg;


    $sql = "SELECT * FROM events;";
    $params = array();
    $records = exec_sql_query($db, $sql, $params)->fetchAll();
    ?>
      <table>
        <tr>
          <th>Event Name</th>
          <th id='date'>Date</th>
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

  <?php if($current_user) { ?>

    <h2>Add an Event</h2>
    <form id="addevent" action="events.php" method="post">
      <ul>
        <li>
          <label>Event Name:</label>
          <input type="text" name="event_name" required/>
        </li>
        <!-- <br> -->
        <li>
          <label>Date:</label>
          <input type="text" name="event_date" placeholder="MM-DD-YY" required/>
          <?php
          foreach ($date_messages as $date){
              echo '<p class="date-format">'.$date.'</p>';
            }
            ?>
        </li>
        <!-- <br> -->
        <li>
          <label>Time:</label>
          <input type="text" name="event_time" placeholder="1:00pm" required/>
        </li>
        <!-- <br> -->
        <li>
          <label>Location:</label>
          <input type="text" name="location" required/>
        </li>
        <!-- <br> -->
        <li>
          <label>Description:</label>
        </li>
        <!-- <br> -->
        <li>
          <textarea name="description" cols="40" rows="5"></textarea>
        </li>
        <!-- <br> -->
        <li>
          <button name="submit_insert" type="submit">Add Event</button>
        </li>
      </ul>
    </form>
  <?php }?>

  </div>
<?php include("includes/footer.php");?>
  </article>
  </body>

</html>
