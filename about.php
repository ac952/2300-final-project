<?php
include('includes/init.php');
$current_page_id = "about";
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all" />

  <title>About</title>
</head>

<body>
  <article>
  <?php include("includes/header.php");?>
  <h1 class = "page_header">About</h1>

<span class="about_subheadings">History</span><br>
<p class="aboutp">In 1936, the "Circle K House" at Washington State College was established by
  the Kiwanis Club of Pullman, Washington. Organized as a fraternity, Kappa Iota
  Phi served men who needed financial aid to attend college. Kiwanians also wanted
  to provide collegiate students leadership opportunities for their future careers
  and work service projects to better their communities while having a sense of
  giving back. Now, Circle K International is the largest university service
  leadership organization in the world, performing half a million hours of service
  each year. With more than 13,700 members in 19 nations, CKI is making a positive
  impact on the world every day.</p>

<span class="about_subheadings">Mission</span><br>
<p class="aboutp">Cornell Circle K is a part of Circle K International. Our organization is
  based around the 3 tenets of <span class="color_emphasis">service</span>,
  <span class="color_emphasis">leadership</span>, and <span class="color_emphasis">fellowship</span>.
  It is comprised of college and university students who are responsible citizens
  and leaders sharing a lifelong commitment to community service worldwide. Circle
  K inspires people to better our world. Its motto, the same as Kiwanis International’s,
  is <span class="color_emphasis">“We Build.”</span> Circle K provides constructive
  opportunities for students to become involved on their campuses and in their
  communities through service work to others in need. Members have the chance to
  work with fellow students, children in the community, and other adults in need
  of special programs.</p>

<span class="about_subheadings">Pledge</span><br>
<p class="aboutp">To uphold the Objects of Circle K International, to foster compassion and
  goodwill toward others through service and leadership, to develop our abilities
  and the abilities of all people, and to dedicate ourselves to the realization
  of mankind's potential.</p>

<span class="about_subheadings">Philanthropy Initiatives</span><br>
<p class="aboutp">CKI raises funds for various causes. The major intitiative is "Focusing on the
  Future: Children" which aims to help children aged six to thirteen. This year,
  Cornell Circle K is focusing on the ways we can do small acts of service to
  improve the day to day lives of those in our community.</p>

<span class="about_subheadings">Awards</span>
<ul id="awards">
  <li>NY District Club Spirit Award</li>
  <li>NY District Club Apparel Award</li>
  <li>NY District Club Growth Award</li>
  <li>NY District Unsung Hero Award</li>
</ul>

<span class="about_subheadings">Meetings</span>
<ul>
<li><span class="meetinginfo">Date:</span> Mondays</li>
<li><span class="meetinginfo">Time:</span> 5-6 PM</li>
<li><span class="meetinginfo">Location:</span> Stimson G01</li>
</ul>

  <?php include( "includes/footer.php" ); ?>
</article>
</body>
</html>
