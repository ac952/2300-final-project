/* TODO: create tables */

CREATE TABLE `images` (
  `id`	INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT UNIQUE,
	`img_name`	TEXT NOT NULL,
	`img_ext`	TEXT NOT NULL,
	`user_id` INTEGER NOT NULL
);

INSERT INTO images (id, img_name, img_ext, user_id) VALUES (1,'1.jpg','jpg',1);


/* TODO: initial seed data */
