
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
</head>

<!-- <div class="container"> -->
  <title>EBoard</title>

<div class="body">
<body>

  <article>
  <?php include("includes/header.php");?>
  <h1 class = "page_header">Executive Board Members</h1>

  <div class="container">
  <div class="membercontainer">
    <img src="./uploads/images/brendon_nguyen.jpg" alt ="memberFace">
    <div class="overlay">
      <div class="membername">Brendon Nguyen</div>
      <div class="major">Major: Computer Science</div>
      <div class="year">Year: 2020</div>
      <div class="hometown">Hometown: Mansfield, TX</div>
      <div class="hobby">Hobby: Rubiks cubes</div>
  </div>
  <div class="photolabel">
    <p>Co-President</p>
  </div>
</div>

<div class="membercontainer">
  <img src="./uploads/images/christine_zhang.jpg" alt ="memberFace">
  <div class="overlay">
    <div class="membername">Christine Zhang</div>
    <div class="major">Major: Biology</div>
    <div class="year">Year: 2019</div>
    <div class="hometown">Hometown: California</div>
    <div class="hobby">Hobby: Skating</div>
</div>
<div class="photolabel">
  <p>Co-President</p>
</div>
</div>


<div class="membercontainer">
  <img src="./uploads/images/will_pascocello.jpg" alt ="memberFace">
  <div class="overlay">
    <div class="membername">Will Pascocello</div>
    <div class="major">Major: AEM</div>
    <div class="year">Year: 2020</div>
    <div class="hometown">Hometown: Westchester, NY</div>
    <div class="hobby">Hobby: Tennis</div>
</div>
<div class="photolabel">
  <p>Vice President</p>
</div>
</div>

</div>

<div class="container">
<div class="membercontainer">
  <img src="./uploads/images/adam_fekini.jpg" alt ="memberFace">
  <div class="overlay">
    <div class="membername">Adam Fekini</div>
    <div class="major">Major: AEM</div>
    <div class="year">Year: 2021</div>
    <div class="hometown">Hometown: San Diego, CA</div>
    <div class="hobby">Hobby: Investing</div>
</div>
<div class="photolabel">
  <p>Treasurer</p>
</div>
</div>

<div class="membercontainer">
  <img src="./uploads/images/jason_lee.jpg" alt ="memberFace">
  <div class="overlay">
    <div class="membername">Jason Lee</div>
    <div class="major">Major: Biology</div>
    <div class="year">Year: 2020</div>
    <div class="hometown">Hometown: Cupertino, CA</div>
    <div class="hobby">Hobby: Cooking</div>
</div>
<div class="photolabel">
  <p>Editor</p>
</div>
</div>

<div class="membercontainer">
  <img id="harper" src="./uploads/images/donna_yu.jpg" alt ="memberFace">
  <div class="overlay">
    <div class="membername">Donna Yu</div>
    <div class="major">Major: AEM</div>
    <div class="year">Year: 2019</div>
    <div class="hometown">Hometown: Stekaut, NY</div>
    <div class="hobby">Hobby: Knitting</div>
</div>
<div class="photolabel">
  <p>Secretary</p>
</div>
</div>


</div>

  <?php include( "includes/footer.php" ); ?>
</article>
</body>
</div>

<!-- </div> -->
</html>
