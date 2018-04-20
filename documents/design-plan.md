# Project 4 - Design & Plan

Your Team Name: White Wolf

## Milestone 1, Part II: Client Selection

### Client Description

[Tell us about your client. Who is your client? What kind of website do they want? What are their key goals?]

Our client is Circle K International, a community service club on Cornell's campus. They host multiple fundraisers and local charity events throughout the year. They want a website that students can use to find information about the club, upcoming events, current e-board, and pictures from previous events. Their key goals are to make sure that their members and the general student body have digital access to up-to-date information so that they can maximize volunteer participation and club awareness.

[NOTE: If you are redesigning an existing website, give us the current URL and some screenshots of the current site. Tell us how you plan to update the site in a significant way that meets the final project requirements.]


## Milestone 1, Part III: Client Requirements

### Target Audience(s)

[Tell us about the potential audience for this website. How, when, and where would they interact with the website? Get as much detail as possible from the client to help you find representative users.]

The target audience is undergraduate Cornell students, most likely freshmen and sophomores, who are looking for information on community service opportunities. They would interact with the website on their computers during the school week, after club fest, or on the weekends before service events.

### Purpose & Content

[Tell us the purpose of the website and what it is all about.]
The purpose of the website is to inform potential new members and current members about the mission of the club, their involvement with the Ithaca community and global charities, their current leadership board members, and schedule of events and meetings. We will have five pages: an About page, E-board page, Gallery page, Log-In, and Upcoming Events page.

### Needs and Wants

[Collect your client's and target audience's needs and wants for the website. Come up with several appropriate design ideas on how those needs may be met. In the **Memo** field, justify your ideas and add any additional comments you have. There is no specific number of needs required for this, but you need enough to do the job.]

* Needs/Wants #1
  * **Needs and Wants** (What does your client and audience need and want?)
    * Client wants current members to be able to log in and update event schedule as well as add/delete images to the gallery.
  * **Design Ideas and Choices** (How will you meet those needs and wants?)
    * Use session ID and methods learned in class/lab to log in current members to show pages that are accessible to current members only. Clear log-in and log-out messages to let users know about their log-in status.
    * API that syncs Facebook updates to the website
  * **Memo** (Justify your decisions; additional notes.)
    * Log-in and session functionality can be done through modeling the techniques learned in class.
    * API would involve a steep learning curve and would be less feasible given our current knowledge.

    * Needs/Wants #2
      * **Needs and Wants** (What does your client and audience need and want?)
        * Client wants website to be eye-catching but not too colorful. They want the site to reflect the personality of the philanthropic personality of their club.
      * **Design Ideas and Choices** (How will you meet those needs and wants?)
        * Incorporate their logo and a color scheme consistent with their club's colors
        * A modern and intuitive yet professional styling on fonts, font sizes, headers, footers, and organization of body information.
      * **Memo** (Justify your decisions; additional notes.)
        * Logo and colors can be modified through diligent CSS styling
        * Styling on fonts and information can be optimized through visual design techniques learned in lecture.

### Hosting Plan

[What is your plan for hosting your client's website?]
We will inform the client about multiple paid and free options for hosting, such as Heroku. They will decide which platform is most suitable to their budget and usability.

### Client's Edits

[Does the client need the ability to edit the site after the end of the semester? If **Yes**, tell us how you site fit your client's need. If **No**, write down N/A.]
Yes, we want logged-in users to be able to continue to edit events, pictures, and e-board. General users will remain unable to edit the site in any manner.

### Information Architecture, Content, and Navigation

[Lay out the plan for how you'll organize the site and which content will go where. Note any content (e.g., text, image) that you need to make/get from the client.]

[Note: As with the Needs and Wants table, there is no specific amount to write here. You simply need enough content to do the job.]

Example:
* Content #1
  * **Main Navigation** (List your site's navigation here.)
    * About Us, Upcoming Events, Gallery, E-board, Log-In
  * **Sub-Categories** (List any sub-categories of under the main navigation.)
    * N/A
  * **Content** (List all the content corresponding to main navigation and sub-categories.)
    * *Main Navigation* : Horizontal navigation bar that highlights tabs when hovered over
    * *About Us*: list the mission statement, history, philanthropy initiatives, tenets, and awards/achievements.
    * *Upcoming Events*: list all dates and times for upcoming events for the current semester, including district and national events. Log-in members should be able to edit events on this page.
    * *Gallery*: display a slideshow of photos showcasing volunteers at a wide range of events
    * *E-board*: photos and short biographies of current e-board members in the club so that users can put a face to the leaders of the club
    * *Log-in*: A page with a log-in and password box for members to log-in to make changes to gallery and event schedule
    * *Contact*: Contact information will be in footer of page


### Interactivity

[What interactive features will your site have? What PHP elements will you include?]

[Much of this is up to you, however, implementing a login system is **required**. Logging in should not be required to view the site, however it must unlock extra functionality, e.g., admin functionality, comment posting, etc.]

* Log-in system that will unlock adding/deleting of events on the events page and adding/deleting images on the gallery page. General users will be able to view this information but not edit it.
* A slideshow for images to allow users to transition between image viewing smoothly
* Hover and highlight feature that lets users know which page they are on

[Also, describe how the interactivity connects with the needs of the clients/target audience.]
* Logging in allows the client's members to control the content of the website to keep it up-to-date with service events and images while also preventing non-members from making changes
* A slideshow will allow viewers to move seamlessly through the photo gallery and give users a better sense of what the club does/what they are like, thereby encouraging them to join.
* Hover and highlight features will allow users to keep track of their position through the website and make clear their actions in regards to navigation, which fulfills client's desires to have a modern and intuitive website design

### External Code

[What libraries (e.g. editor.js, jQuery Cookie, Image Sliders, jQuery) are you planning to use for the site? What do you have to do to incorporate those libraries? How much of your own code will satisfy the project requirements?]
* javascript for the slideshow
* 90% of our code will be our own, with the rest coming from references to class code and external code. We will have a javascript folder under our styles folder.

### Scale

[How large will the site be (approximate number of pages) and how many hours of work will be required to complete it?]
The site will be approximately 5 pages (perhaps an extra one or two pages that users will be redirected to for editing) and will require 120 hours of work, with approximately 30 hours of work a week (6 hours per team member per week).

## Milestone 1, Part IV: Work Distribution

[Describe how each of your responsibilities will be distributed among your group members.]

[Set internal deadlines. Determine your internal dependencies. Whose task needs to be completed first in order for another person's task to be relevant? Be specific in your task descriptions so that everyone knows what needs to be done and can track the progress effectively. Consider how much time will be needed to review and integrate each other's work. Most of all, make sure that tasks are balanced across the team.]

Jessica & Aileen: heavily involved in back-end coding
Shaina: information architecture and content, some coding both on back and front end
Kathy: front-end design, javascript, some back-end
George: heavily involved in front-end design, javascript, and some back-end
Everyone will review everyone else's work and help out wherever possible.

Aim for milestones to be finished by Monday so that we have a buffer of time.
Wireframing and sketching done by Thursday (George, Kathy).
Back-end coding needs to be done first to set infrastructure for design and fine-tuning of interactivity (Jessica, Aileen).
Start coding and have a skeleton site ready by the end of Milestone 2. Full engagement in coding begins after Milestone 2 (Everyone).
Draft of site should be well-rounded by end of Milestone 3. Perfecting details and functionality throughout Milestone 4 to 5.

## Milestone 1, Part V: Additional Comments

[If you feel like you haven't fully explained your design choices, or if you want to explain some other functions in your site (such as special design decisions that might not meet the final project requirements), you can use this space to justify your design choices or ask other questions about the project and process.]



## Milestone 2, Part I: PHP Interactivity

[Describe here what you plan to do for your PHP Interactivity requirement.]

## Milestone 2, Part II: Sketches, Navigation & Wireframes

### Sketches

[Insert your sketches here.]

### Navigation

[What will be your top-level pages and your sub-pages for those top-level pages? What will your website's navigational structure?]

[Tip: If you use card sorting for your navigation, show us that work by including a picture!]

Example:
* Products (top-level)
  * Shoes (sub-page)
  * Pants
  * Shirts
* Shopping Cart
* Contact

### Wireframes

[Insert your wireframes here.]

## Milestone 2, Part III: Evaluate your Design

[Use the GenderMag method to evaluate your wireframes.]

[Pick a persona that you believe will help you address the gender bias within your design.]

I've selected **[Abby/Patricia/Patrick/Tim]** as my persona.

I've selected my persona because... [Tell us why you picked your persona in 1-3 sentences. Your explanation should include why your persona will help you address gender-inclusiveness bugs in your design.]

### Tasks

[You will need to evaluate at least 3 tasks (known as scenarios in the GenderMag literature). List your tasks here. These tasks are the same as the task you learned in INFO/CS 1300.]

[For each task, list the ideal set of actions that you would like your users to take when working towards the task.]

Task 1: [describe your task]

  1. [action 1...]
  2. [action 2...]
  3. ...

Task 2:

Task 3:

### Cognitive Walkthrough

[Perform a cognitive walkthrough using the GenderMag method for all of your Tasks. Use the GenderMag template in the <documents/gendermag-template.md> file.]

#### Task 1 - Cognitive Walkthrough

[copy the GenderMag template here and conduct a cognitive walkthrough to evaluate your design (wireframes).]

[You may need to add additional subgoals and/or actions for each task.]

#### Task 2 - Cognitive Walkthrough


#### Task 3 - Cognitive Walkthrough


### Cognitive Walk-though Results

[Did you discover any issues with your design? What were they? How did you change your design to address the gender-inclusiveness bugs you discovered?]

[Your responses here should be very thorough and thoughtful.]

## Milestone 2, Part IV: Database Plan

### Database Schema

[Describe the structure of your database. You may use words or a picture. A bulleted list is probably the simplest way to do this.]

Table: movies
* field 1: description...
* field...

### Database Queries

[Plan your database queries. You may use natural language, pseudocode, or SQL.]

## Milestone 2, Part V: Structure and Pseudocode

### Structure

[List the PHP files you will have. You will probably want to do this with a bulleted list.]

* index.php - main page.
* includes/init.php - stuff that useful for every web page.
* header.php
* footer.php
* gallery.php
* login.php 
* logout.php
* events.php
* eboard.php

### Pseudocode

[For each PHP file, plan out your pseudocode. You probably want a subheading for each file.]

We will have five pages: an About page, E-board page, Gallery page, Log-In, and Upcoming Events page.

#### header.php

```
title of website

for loop iterating through navigation links of pages that will be available for user. Pages that show will depend on:
- whether admin is logged in or logged out
- styled depending on which page user is currently on

show message whether a user is currently logged in or not.
```

#### footer.php

```
credits to us (names and net ids)

```
#### index.php

```
includes header and footer at top and bottom of page

text with formatting for:
- mission statement
- history
- philanthropy initiatives
- awards/recognition

```
#### includes/init.php

```
array of all pages used in header

messages = array to store messages for user

// DB helper functions

db = connect to db

login and logout functions

checking if user is logged in

```
#### eboard.php

```
includes header and footer at top and bottom of page

show profiles of e-board members (formatted text and images)
- name
- major
- title
- info
- profile photo

```
#### gallery.php

```
includes header and footer at top and bottom of page

slideshow of photos with captions
 - formatted using Javascript
 - making sql query
 - executing sql query
 - iterating through records of photos and displaying them in slideshow

if statement giving a link to edit photos if admin is logged in

```
#### events.php

```
includes header and footer at top and bottom of page

formatted table with upcoming events with fields containing date, info, etc. from our database
- making sql query
- executing sql query
- iterating through event and event details to show in table

```

#### login.php

```
includes header and footer at top and bottom of page

only shows in header if user is not logged in

will have a form that allows users to put in usernames and passwords and a submit button

will filter input and escape output

```
#### logout.php

```
includes header and footer at top and bottom of page

only shows in header once user is logged in

clear session and display message to user whether or not log out was successful

```

## Milestone 2, Part VI: Additional Comments

[Add any additional comments you have here.]


## Milestone 3: Updates

[If you make any changes to your plan or design, make a list of the changes here.]


## Milestone 4: Updates

[If you make any changes to your plan or design based on your peers' feedback, make a list of the changes here.]


## Milestone 5: Cognitive Walkthrough

[Copy your tasks here from Milestone 2. Update them if you need to and then conduct another cognitive walkthrough.]

### Cognitive Walk-though Results

[Did you discover any issues with your design? What were they? How did you change your design to address the gender-inclusiveness bugs you discovered?]

[Your responses here should be very thorough and thoughtful.]

## Milestone 5: Final Notes to the Clients

[Describe in some detail what the client will do (or would have to do) in order to make this website go live. What is the deployment plan?]

[Include any other information that your client needs to know about your final website design. For example, what client wants or needs were unable to be realized in your final product? Why were you unable to meet those wants/needs?]

## Milestone 5: Final Notes to the Graders

[1. Give us three specific strengths of your site that sets it apart from the previous website of the client (if applicable) and/or from other websites. Think of this as your chance to argue for the things you did really well.]

[2. Tell us about things that don't work, what you wanted to implement, or what you would do if you keep working with the client in the future. Give justifications.]

[3. Tell us anything else you need us to know for when we're looking at the project.]
