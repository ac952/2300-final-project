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
  // }

  // php for updating any changes to events page AND db
  // if (isset($_POST["submit_changes"])){
    $id = $_POST['submit_changes'];
    // use INSERT events
    $sql = "UPDATE events SET event_name = '$event_name', event_month ='$event_month',
    event_date='$event_date',event_year='$event_year', location='$location',
    description='$description' WHERE id = '$id'";
    $params = array();
    $records = exec_sql_query($db, $sql, $params);

    // echo changes in the edit_events.php page
    // if sql is executed successfully, echo success
    if ($records){
      echo 'Your changes have been updated!';
    } else {
      echo 'Changes have not been updated. Please fill out form again.';
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
  <title>Edit Events</title>
</head>
<body>
  <?php include("includes/header.php");?>
  <h1>Edit Event </h1>
    <!-- get the info from db based on selected cell id-->
    <!-- echo inside input -->
    <form id="event" action="edit_events.php" method="post">
      <ul>
        <li>
          <label>Event Name:</label>
          <input type="text" name="event_name"
          value =" <?php foreach($records as $record)
          {echo htmlspecialchars($record['event_name']);}?> "/>
        </li>
        <li>
          <label>Date:</label>
          <input type="text" name="event_month" placeholder="MM"
          value =" <?php foreach($records as $record)
          {echo htmlspecialchars(intval($record['event_month']));}
          ?> "/>/
          <input type="text" name="event_date" placeholder="DD"
          value =" <?php foreach($records as $record)
          {echo htmlspecialchars(intval($record['event_date']));}?> "/>/
          <input type="text" name="event_year" placeholder="YYYY"
          value =" <?php foreach($records as $record)
          {echo htmlspecialchars(intval($record['event_year']));}?> "/>
        </li>
        <li>
          <label>Time:</label>
          <input type="text" name="event_time" placeholder="format: 4:00pm"
          value =" <?php foreach($records as $record)
          {echo htmlspecialchars($record['event_time']);}?> " />
        </li>
        <li>
          <label>Location:</label>
          <input type="text" name="location"
          value =" <?php foreach($records as $record)
          {echo htmlspecialchars($record['location']);}?> "/>
        </li>
        <li>
          <label>Description:</label>
        </li>
        <!-- <li> -->
          <input id="description-box" type="text" name="description" cols="40" rows="5"
          value =" <?php foreach($records as $record)
          {echo htmlspecialchars($record['description']);}?> ">
        </input>
        <!-- </li> -->
        <li>
          <button name="submit_changes" type="submit"
          value='<?php foreach($records as $record) {echo $record['id'];}
          ?>'>Update Changes</button>
        </li>
      </ul>
    </form>

  <?php include("includes/footer.php");?>

</body>
</html>
