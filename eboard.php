<?php
include('includes/init.php');
$current_page_id = "eboard";
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all" />

  <title>Eboard</title>
</head>

<body>
  <?php include("includes/header.php");?>
  <h1 class = "page_header">Eboard</h1>

<div class="eboard_member">
  <span class="size">Brendon Nguyen</span><br>
  <span class="position">President</span><br>
  <span class="color_emphasis">Year + Major:</span> Computer Science (Minor in Education), 2020<br>
  <span class="color_emphasis">Hometown:</span> Mansfield, TX<br>
  <span class="color_emphasis">Hobby:</span> Speedsolving Rubik’s cubes<br><br>
</div>

<div class="eboard_member">
  <span class="size">Christine Zhang</span><br>
  <span class="position">President</span><br>
  <span class="color_emphasis">Year + Major:</span> Biology (focus on Neurobiology and Behavior), 2019<br>
  <span class="color_emphasis">Hometown:</span> California<br>
  <span class="color_emphasis">Hobby:</span> Eating too much fruit, ice skating, etc<br><br>
</div>

<div class="eboard_member">
  <span class="size">Will Pascocello</span><br>
  <span class="position">Vice-President</span><br>
  <span class="color_emphasis">Year + Major:</span> AEM, 2020<br>
  <span class="color_emphasis">Hometown:</span> New Rochelle, NY<br>
  <span class="color_emphasis">Hobby:</span> Tennis<br><br>
</div>

<div class="eboard_member">
  <span class="size">Lauren Harper</span><br>
  <span class="position">Secretary</span><br>
  <span class="color_emphasis">Year + Major:</span> Animal Science, 2020<br>
  <span class="color_emphasis">Hometown:</span> New Egypt, NJ<br>
  <span class="color_emphasis">Hobby:</span> Knitting<br><br>
</div>

<div class="eboard_member">
  <span class="size">Adam Fekini</span><br>
  <span class="position">Treasurer</span><br>
  <span class="color_emphasis">Year + Major:</span> AEM, 2021<br>
  <span class="color_emphasis">Hometown:</span> San Diego, CA<br>
  <span class="color_emphasis">Hobby:</span> Investing<br><br>
</div>

<div class="eboard_member">
  <span class="size">Jason Lee</span><br>
  <span class="position">Editor</span><br>
  <span class="color_emphasis">Year + Major:</span> Biological Sciences, 2020<br>
  <span class="color_emphasis">Hometown:</span> Cupertino, CA<br>
  <span class="color_emphasis">Hobby:</span> Cooking<br><br>
</div>

  <?php include( "includes/footer.php" ); ?>
</body>
</html>
