
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
  <img id="harper" src="./uploads/images/lauren_harper.jpg" alt ="memberFace" height= "524" width="100%">
  <div class="overlay">
    <div class="membername">Lauren Harper</div>
    <div class="major">Major: Animal Science</div>
    <div class="year">Year: 2020</div>
    <div class="hometown">Hometown: New Egypt, NJ</div>
    <div class="hobby">Hobby: Knitting</div>
</div>
<div class="photolabel">
  <p>Secretary</p>
</div>
</div>


</div>
  <!-- <div id='boxes'> -->
      <!-- <a class="clickMember" href="member1.php">
        <div class="memberBox">
          <div class="memberPic">
            <img src="./uploads/images/brendon_nguyen.jpg" alt ="memberFace" class="memberProPic">
            <div class="middleText">
              <div class="memberName">
                Co-President:
                <br>Brendon Nguyen
              </div>
              <div class="memberMajor">
                Major: Computer Science
              </div>
              <div class="memberYear">
                Year: 2020
              </div>
              <div class="memberHome">
                Hometown: Mansfield, TX
              </div>
              <div class="memberHobby">
                Hobby: Rubik's cubes
              </div>
            </div>
          </div>
        </div> -->
      <!-- </a> -->
      <!-- <div class="memberBox">
        <div class="memberPic">
          <img src="./uploads/images/christine_zhang.jpg" alt ="memberFace" class="memberProPic">
          <div class="middleText">
            <div class="memberName">
              Co-President:
              <br>Christine Zhang
            </div>
            <div class="memberMajor">
              Major: Biology
            </div>
            <div class="memberYear">
              Year: 2019
            </div>
            <div class="memberHome">
              Hometown: California
            </div>
            <div class="memberHobby">
              Hobby: Eating too much fruit
            </div>
          </div>
        </div>
      </div> -->

      <!-- <div class="memberBox">
        <div class="memberPic">
          <img src="./uploads/images/will_pascocello.jpg" alt ="memberFace" class="memberProPic">
          <div class="middleText">
            <div class="memberName">
              Vice President:
              <br>Will Pascocello
            </div>
            <div class="memberMajor">
              Major: AEM
            </div>
            <div class="memberYear">
              Year: 2020
            </div>
            <div class="memberHome">
              Hometown: New Rochelle, NY
            </div>
            <div class="memberHobby">
              Hobby: Tennis
            </div>
          </div>
        </div>
      </div> -->

    <!-- </div> -->
    <!-- <div class="circles">
    <div class="circle">
      <div class="circleTitle"> Major</div>
    <div class="circleMajor">Computer Science</div>
     </div> -->
<!--
<div class="eboard_member">
  <img class= "eboard_pic" src="./uploads/images/brendon_nguyen.jpg" alt="Brendon Nguyen" height="400" width="280"><br>
  <span class="size">Brendon Nguyen</span><br>
  <span class="position">President</span><br>
  <span class="color_emphasis">Year + Major:</span> Computer Science (Minor in Education), 2020<br>
  <span class="color_emphasis">Hometown:</span> Mansfield, TX<br>
  <span class="color_emphasis">Hobby:</span> Speedsolving Rubik’s cubes<br><br>
</div> -->

<!-- <div class="eboard_member">
  <img class= "eboard_pic" src="./uploads/images/christine_zhang.jpg" alt="Christine Zhang" height="400" width="280"><br>
  <span class="size">Christine Zhang</span><br>
  <span class="position">President</span><br>
  <span class="color_emphasis">Year + Major:</span> Biology (focus on Neurobiology and Behavior), 2019<br>
  <span class="color_emphasis">Hometown:</span> California<br>
  <span class="color_emphasis">Hobby:</span> Eating too much fruit, ice skating, etc<br><br>
</div>

<div class="eboard_member">
  <img class= "eboard_pic" src="./uploads/images/will_pascocello.jpg" alt="Will Pascocello" height="400" width="280"><br>
  <span class="size">Will Pascocello</span><br>
  <span class="position">Vice-President</span><br>
  <span class="color_emphasis">Year + Major:</span> AEM, 2020<br>
  <span class="color_emphasis">Hometown:</span> New Rochelle, NY<br>
  <span class="color_emphasis">Hobby:</span> Tennis<br><br>
</div>

<div class="eboard_member">
  <img class= "eboard_pic" src="./uploads/images/lauren_harper.jpg" alt="Lauren Harper" height="400" width="280"><br>
  <span class="size">Lauren Harper</span><br>
  <span class="position">Secretary</span><br>
  <span class="color_emphasis">Year + Major:</span> Animal Science, 2020<br>
  <span class="color_emphasis">Hometown:</span> New Egypt, NJ<br>
  <span class="color_emphasis">Hobby:</span> Knitting<br><br>
</div>

<div class="eboard_member">
  <img class= "eboard_pic" src="./uploads/images/adam_fekini.jpg" alt="Adam Fekini" height="400" width="280"><br>
  <span class="size">Adam Fekini</span><br>
  <span class="position">Treasurer</span><br>
  <span class="color_emphasis">Year + Major:</span> AEM, 2021<br>
  <span class="color_emphasis">Hometown:</span> San Diego, CA<br>
  <span class="color_emphasis">Hobby:</span> Investing<br><br>
</div>

<div class="eboard_member">
  <img class= "eboard_pic" src="./uploads/images/jason_lee.jpg" alt="Jason Lee" height="400" width="280"><br>
  <span class="size">Jason Lee</span><br>
  <span class="position">Editor</span><br>
  <span class="color_emphasis">Year + Major:</span> Biological Sciences, 2020<br>
  <span class="color_emphasis">Hometown:</span> Cupertino, CA<br>
  <span class="color_emphasis">Hobby:</span> Cooking<br><br>
</div> -->
  <?php include( "includes/footer.php" ); ?>
</article>
</body>
</div>

<!-- </div> -->
</html>
