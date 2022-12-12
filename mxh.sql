CREATE TABLE `user_profile` (
  `id` int NOT NULL auto_increment,
   PRIMARY KEY (id),
  `user_acc` varchar(50) NOT NULL DEFAULT '',
  `password`varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `name`  varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `numberphone` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `location_img` varchar(100) 
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `user_post` (
  `id` int NOT NULL auto_increment,
   PRIMARY KEY (id),
  `user_id` int NOT NULL,
  `title`varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL  DEFAULT '',
  `written_text` varchar(100)  CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `img_location`varchar(50 ) NOT NULL DEFAULT '',
  `link_video` varchar(50) NOT NULL DEFAULT '',
   FOREIGN KEY (`user_id`) REFERENCES `user_profile` (`id`) ON UPDATE CASCADE
)ENGINE=InnoDB DEFAULT CHARSET=latin1;
-- CREATE TABLE `post_like` (
--   `id` int  NOT NULL auto_increment,
--    PRIMARY KEY (id),
--   `post_id` int,
--   `user_id` int,
--   `creted_datatime` datetime
-- );

-- CREATE TABLE `post_comment` (
--   `id` int NOT NULL auto_increment,
--    PRIMARY KEY (id),
--   `post_id` int,
--   `user_id` int,
--   `comment` varchar(100),
--   `creted_datatime` datetime
-- );


-- ALTER TABLE `post_like` ADD FOREIGN KEY (`user_id`) REFERENCES `user_profile` (`id`);

-- ALTER TABLE `post_comment` ADD FOREIGN KEY (`user_id`) REFERENCES `user_profile` (`id`);

-- ALTER TABLE `post_like` ADD FOREIGN KEY (`post_id`) REFERENCES `user_post` (`id`);

-- ALTER TABLE `post_comment` ADD FOREIGN KEY (`post_id`) REFERENCES `user_post` (`id`);
