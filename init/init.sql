/* TODO: create tables */

CREATE TABLE `images` (
  `id`	INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT UNIQUE,
	`img_name`	TEXT NOT NULL,
	`img_ext`	TEXT NOT NULL,
	`user_id` INTEGER NOT NULL
);

INSERT INTO images (id, img_name, img_ext, user_id) VALUES (1,'1.jpg','jpg',1);



CREATE TABLE `events`(
  'id' INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT UNIQUE,
  'event_name' TEXT NOT NULL,
  'event_date' INTEGER NOT NULL,
  'event_time' TEXT NOT NULL,
  'location' TEXT NOT NULL,
  'description' TEXT NOT NULL
);

INSERT INTO events (id, event_name, event_date, event_time, location, description) VALUES (1,'djknkwe', 052818,'4:00pm','Uris', 'gngkbml');
INSERT INTO events (id, event_name, event_date, event_time, location, description) VALUES (2,'nwe',052418,'2:00pm','Olin', 'gngdkbml');
INSERT INTO events (id, event_name, event_date, event_time, location, description) VALUES (3,'dkwe',051818,'1:00pm','Klarman', 'gngfweckbml');


/* TODO: initial seed data */
