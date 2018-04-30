<header>
  <div class = "title_div">
    <a href = "index.php">
      <img id = "cornellcircleklogo" src = "images/cornellcirclek_logo.png" alt = "Cornell Circle K Logo"> </a>
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

        echo "<li> <a " . $css . " href='" . $id. ".php'>$name</a></li>";
      }
      ?>
      </ul>
    </nav>
  </div>
</header>
