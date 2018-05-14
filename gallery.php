<?php

include('includes/init.php');

$current_page_id="gallery";

const IMG_UPLOADS_PATH = "uploads/images/";
const MAX_FILE_SIZE = 1000000;

if (isset($_POST['delete_photo'])) {
  $delete_photo = TRUE;
  $img_id = filter_input(INPUT_GET, 'delete_photo', FILTER_SANITIZE_STRING);
  }
else {
  $delete_photo = FALSE;
  $img_id = NULL;
}

//adding a photo

//performing upload
if (isset($_POST["submit_upload"])) {
  $upload_info = $_FILES["photo_file"];

  if ($upload_info['error'] == UPLOAD_ERR_OK) {
    $img_name = basename($upload_info["name"]);
    $upload_ext = strtolower(pathinfo($img_name, PATHINFO_EXTENSION) );

    if($upload_ext=="jpg" || $upload_ext=="jpeg" || $upload_ext=="png"){
      $user_id = $current_user;

      $sql = "INSERT INTO images (img_name,img_ext,user_id) VALUES (:img_name,:img_ext,:user_id)";
      $params = array(
        ':img_name' => $img_name,
        ':img_ext' => $upload_ext,
        ':user_id' => $user_id
      );
      $result = exec_sql_query($db, $sql, $params);

      if ($result) {
        $img_id = $db->lastInsertId("id");
        if (move_uploaded_file($upload_info["tmp_name"], IMG_UPLOADS_PATH . "$img_id.$upload_ext")){
          array_push($messages, "Your file has been uploaded.");
        }
      } else {
        array_push($messages, "Failed to upload file.");
      }
    }
    else{
      array_push($messages, "Failed to upload file. File was not a supported type.");
    }
  }
  else {
    array_push($messages, "Failed to upload file.");
  }
}
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all" />
  <title>Gallery</title>
</head>

<body>
  <article>
  <?php include("includes/header.php");?>
    <div id="content-wrap">
    <h1 id="page_header"> Gallery</h1>

    <?php
      print_messages();

      if($delete_photo){
        $sql = "DELETE FROM images WHERE id=:img_id;";
        $params = array(
          ':img_id' => $img_id,
        );
        $records = exec_sql_query($db, $sql, $params)->fetchAll();
        foreach($records as $record){
          unlink(IMG_UPLOADS_PATH.$record['img_name']);
        }
        echo "<h2>Photo was successfully deleted.</h2>";
      }
    ?>
    <?php
      if($current_user) { ?>

      <form id="uploadFile" action="gallery.php" method="post" enctype="multipart/form-data">
      <ul>
        <li>
          <label>Upload File:</label>
          <input type="hidden" name="MAX_FILE_SIZE" value="<?php echo MAX_FILE_SIZE; ?>" />
          <input type="file" name="photo_file" required>
        </li>
        <li>
          <button name="submit_upload" type="submit">Upload</button>
        </li>
      </ul>
      </form>
      <?php }?>


    <?php
      $records = exec_sql_query($db, "SELECT * FROM images")->fetchAll(PDO::FETCH_ASSOC);
      foreach($records as $record){
        echo "<div class=\"gallery\"><img src=\"" .IMG_UPLOADS_PATH. htmlspecialchars($record["id"].".".$record["img_ext"]) .
        "\">" ."</div>";

        //checks if user is owner and logged in before showing delete option
        $sql = "SELECT * FROM images WHERE id = :img_id";
        $params = array(
          ':img_id' => $record["id"]
        );
        $records = exec_sql_query($db, $sql, $params)->fetchAll();
        foreach($records as $record){
          $owner_id = $record["user_id"];

        if($current_user) {
          if($current_user==$owner_id){?>

          <form id="uploadFile" action=<?php echo "gallery.php?delete_photo=".htmlspecialchars($record["id"]) ?>
            method="post" enctype="multipart/form-data">
            <ul>
              <li>
                <label>Delete this photo:</label>
              </li>
              <li>
                <input type="submit" name="delete_photo" value="Delete">
              </li>
            </ul>
          </form>
        <?php }}
            }}
         ?>
    </div>
  </article>
  </body>
  <?php include("includes/footer.php");?>
</html>
