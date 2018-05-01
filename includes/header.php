<header>
  <div class = "title_div">
    <a href = "index.php">
      <img id = "cornellcircleklogo" src = "uploads/images/cornellcirclek_logo.png" alt = "Cornell Circle K Logo"> </a>
  </div>
  <div class = "title_div">
    <h1 id="title">Cornell Circle K</h1>
  </div>
  <div class = "menu_div">
    <nav id="menu">
      <ul>

        <?php
        foreach( $pages as $id => $name ) {
          if ( $id == $current_page_id ) {
            $css = "id='current_page'";
          } else {
            $css = "";
          }

          if($current_user){
            if($name == "Login"){
              echo "";
            }
            else{
              echo "<li><a " . $css . " href='" . $id. ".php'>$name</a></li>";
            }
          }
          else{
            if($name == "Logout"){
              echo "";
            }
            else{
              echo "<li><a " . $css . " href='" . $id. ".php'>$name</a></li>";
            }
          }
      }
      ?>
      </ul>
    </nav>
  </div>
  <p>
        <?php
        if ($current_user) {
          echo "Hi, you are logged in as $current_user.";
        }
        ?>
      </p>
</header>
