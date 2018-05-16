<?php include('includes/init.php');

$current_page_id = "edit_events";
$messages = array();
$date_messages = array();

if (isset($_POST["submit_changes"])) {
  $event_name = filter_input(INPUT_POST, 'event_name', FILTER_SANITIZE_STRING);
  $event_time = filter_input(INPUT_POST, 'event_time', FILTER_SANITIZE_STRING);
  $location = filter_input(INPUT_POST, 'location', FILTER_SANITIZE_STRING);
  $description = filter_input(INPUT_POST, 'description', FILTER_SANITIZE_STRING);


  $event_date = filter_input(INPUT_POST, 'event_date', FILTER_SANITIZE_STRING);
  // $event_date= preg_replace('/\s+/', ' ', $event_date);
  $date_confirm = FALSE;
  if (preg_match("/^(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])-[0-9]{2}$/",trim($event_date,' '))){
      $date_confirm = TRUE;
    }
    else {
      $date_confirm = FALSE;
      array_push($date_messages, "*Enter date in proper format");
  }

  // php for updating any changes to events page AND db
  // if (isset($_POST["submit_changes"])){

  // use INSERT events
  $id = $_POST['submit_changes'];
  $sql = "SELECT * FROM events WHERE id = '$id'";
  $params = array();
  $records = exec_sql_query($db, $sql, $params)->fetchAll(PDO::FETCH_ASSOC);

    // echo changes in the edit_events.php page
    // if sql is executed successfully, echo success
    // if records and regex match then continue
    if ($date_confirm && $records) {
      // echo '<h3 id="success">Your changes have been updated!</h3>';
      array_push($messages, "<h3 class='eventAdd'>Your changes have been updated!</h3>");
      $id = $_POST['submit_changes'];
      // use INSERT events
      $sql = "UPDATE events SET event_name = '$event_name',
      event_date='$event_date', location='$location',
      description='$description' WHERE id = '$id'";
      $params = array();
      $records = exec_sql_query($db, $sql, $params);

    } else {
      // echo '<h3 id="fail">Changes have not been updated. </h3>';
      array_push($messages, "<h3 class='fail'> Changes have not been updated.</h3>");
      // deletes prefilled info :(
      $id = $_POST['submit_changes'];
      // $sql = "SELECT * FROM events";
      $sql = "SELECT * FROM events WHERE id = '$id'";
      $params = array();
      $records = exec_sql_query($db, $sql, $params)->fetchAll(PDO::FETCH_ASSOC);
  }
}
  // php for sticky form
  // check if the edit button is pressed in the edit.php file
  if(isset($_GET['submit_edit'])){
    $id = $_GET['submit_edit'];
    // get the sql query (row info) for that id
    $sql = "SELECT * FROM events WHERE id = '$id'";
    // $sql = "SELECT * FROM events";
    $params = array();
    $records = exec_sql_query($db, $sql, $params)->fetchAll(PDO::FETCH_ASSOC);
  }

?>
<!DOCTYPE html>
<html lang ="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all" />
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
    <!-- get the info from db based on selected cell id-->
    <!-- echo inside input -->
    <form id="event" action="edit_events.php" method="post">
      <ul>
        <h1>Edit Event </h1>
        <li>
          <label>Event Name:</label>
          <input type="text" name="event_name"
          value =" <?php foreach($records as $record)
          {echo htmlspecialchars($record['event_name']);}?> " required/>
        </li>
        <li>
          <label>Date:</label>
          <!-- <input type="text" name="event_date" placeholder="MM-DD-YY" required/> -->
          <input type="text" name="event_date"
          value =" <?php foreach($records as $record)
          {echo htmlspecialchars($record['event_date']);}?> " required/>
          <?php
          foreach ($date_messages as $date){
              echo '<p class="date-format">'.$date.'</p>';
            }
            ?>
        </li>
        <li>
          <label>Time:</label>
          <input type="text" name="event_time"
          value =" <?php foreach($records as $record)
          {echo htmlspecialchars($record['event_time']);}?> " required/>
        </li>
        <li>
          <label>Location:</label>
          <input type="text" name="location"
          value =" <?php foreach($records as $record)
          {echo htmlspecialchars($record['location']);}?> " required/>
        </li>
        <li>
          <label>Description:</label>
        </li>
        <li>
          <input id="description-box" type="text" name="description" cols="40" rows="5"
          value =" <?php foreach($records as $record)
          {echo htmlspecialchars($record['description']);}?> " required/>
        </input>
        </li>
        <li>
        <br>
          <button name="submit_changes" type="submit"
          value='<?php foreach($records as $record) {echo $record['id'];}
          ?>'>Update Changes</button>

        </li>
      </ul>
    </form>

</div>
<?php include("includes/footer.php");?>

</article>
</body>
</html>
