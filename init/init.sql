/* TODO: create tables */

CREATE TABLE `accounts` (
  `id` INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT UNIQUE,
  `username` TEXT NOT NULL UNIQUE,
  `password` TEXT NOT NULL
);
INSERT INTO accounts (username, password) VALUES ('cornellcirclek', '$2y$10$0Lu7lNhXZyugzs4fcipdQeI.6PVAn3yL8BUZ90FyiEB1S6XfoJlUS'); /*password: service1865*/

CREATE TABLE `images` (
  `id`	INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT UNIQUE,
	`img_name`	TEXT NOT NULL,
	`img_ext`	TEXT NOT NULL,
	`user_id` INTEGER NOT NULL
);

INSERT INTO images (img_name, img_ext, user_id) VALUES ('1.jpg','jpg',1);



CREATE TABLE `events`(
  'id' INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT UNIQUE,
  'event_name' TEXT NOT NULL,
  'event_month' INTEGER NOT NULL,
  'event_date' INTEGER NOT NULL,
  'event_year' INTEGER NOT NULL,
  'event_time' TEXT NOT NULL,
  'location' TEXT NOT NULL,
  'description' TEXT NOT NULL
);

INSERT INTO events (event_name, event_month, event_date, event_year, event_time, location, description) VALUES ('Earth Day Gorge Clean-up',04,22,18,'2:30pm','Johnson Museum of Art', 'In honor of Earth day, will be working with the Society for Natural Resources Conservation to clean up our local gorges.');
INSERT INTO events (event_name, event_month, event_date, event_year, event_time, location, description) VALUES ('Ithaca Children Garden Spring Cleaning', 04,28,18,'9:00am','Ithaca Children Garden', 'Assisting with mulch, construction, and plant care in preparation for spring festivals.');
INSERT INTO events (event_name, event_month, event_date, event_year, event_time, location, description) VALUES ('Girls Adventures in Math',04,29,18,'2:30pm','On Campus', 'Helping proctor, grade, and play games at a team-based math competition for girls in the 3rd-8th grade.');
INSERT INTO events (event_name, event_month, event_date, event_year, event_time, location, description) VALUES ('Circle K Social',05,05,18,'6:00pm','Helen Newmann Bowling Alleys', 'To recap and recognize our philanthropic efforts thorughout this past semester. Free drinks and pizza!');
INSERT INTO events (event_name, event_month, event_date, event_year, event_time, location, description) VALUES ('Adopt a Highway',05,06,18,'10:00am','Brooktondale Baptist Church', 'Picking up trash along local Ithaca highways to keep roads clean.');




/* TODO: initial seed data */
