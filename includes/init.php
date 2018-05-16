<?php

$title = "Circle K International";

$pages = array(
  "about" => "About",
  "eboard" => "E-Board",
  "events" => "Events",
  "gallery" => "Gallery",
  "login" => "Login",
  "logout" => "Logout"
);

// An array to deliver messages to the user.
$messages = array();

// records message to display to the user.
function record_message($message) {
  global $messages;
  array_push($messages, $message);
}

// function exec_sql_query($db, $sql, $params = array()) {
//   $query = $db->prepare($sql);
//   if ($query and $query->execute($params)) {
//     return $query;
//   }
//   return NULL;
// }

// prints messages to the user.
function print_messages() {
  global $messages;
  foreach ($messages as $message) {
    echo "<p><strong>" . htmlspecialchars($message) . "</strong></p>\n";
  }
}

function handle_db_error($exception) {
  echo '<p><strong>' . htmlspecialchars('Exception : ' . $exception->getMessage()) . '</strong></p>';
}

// executes SQL query and return results
function exec_sql_query($db, $sql, $params = array()) {
  try {
    $query = $db->prepare($sql);
    if ($query and $query->execute($params)) {
      return $query;
    }
  } catch (PDOException $exception) {
    handle_db_error($exception);
  }
  return NULL;
}
// YOU MAY COPY & PASTE THIS FUNCTION WITHOUT ATTRIBUTION.
// open connection to database
function open_or_init_sqlite_db($db_filename, $init_sql_filename) {
  if (!file_exists($db_filename)) {
    $db = new PDO('sqlite:' . $db_filename);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $db_init_sql = file_get_contents($init_sql_filename);
    if ($db_init_sql) {
      try {
        $result = $db->exec($db_init_sql);
        if ($result) {
          return $db;
        }
      } catch (PDOException $exception) {
        // If we had an error, then the DB did not initialize properly,
        // so let's delete it!
        unlink($db_filename);
        throw $exception;
      }
    }
  } else {
    $db = new PDO('sqlite:' . $db_filename);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $db;
  }
  return NULL;
}

// open connection to database
$db = open_or_init_sqlite_db("website.sqlite", "init/init.sql");

//log-in and log-out code below
function check_login() {
  if (isset($_SESSION['currentuser'])) {
    return $_SESSION['currentuser'];
  }
  return NULL;
}

function log_in($user, $password) {
  global $db;
  if ($user && $password) {
    $sql = "SELECT * FROM accounts WHERE username = :username;";
    $params = array(
      ':username' => $user
    );
    $records = exec_sql_query($db, $sql, $params)->fetchAll();
    if ($records) {
      // 1 UNIQUE username allowed
      $account = $records[0];
      // Verify password
      if (password_verify($password, $account['password'])) {
        $_SESSION['currentuser'] = $user;
      } else {
        record_message("Username or password not valid.");
      }
    } else {
      record_message("Username or password not valid.");
    }
  } else {
    record_message("Please enter a username or password.");
  }
  return NULL;
}

//log out function and session destroy function
function log_out() {
  global $current_user;
  $current_user = NULL;
  unset($_SESSION['currentuser']);
  session_destroy();
}

// logs in the user and starts user session
session_start();
if (isset($_POST['login'])) {
  $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
  $username = trim($username);
  $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
  $current_user = log_in($username, $password);
}
  $current_user = check_login();

?>
