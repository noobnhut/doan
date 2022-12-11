CREATE TABLE `user_profile` (
  `id` int NOT NULL auto_increment,
   PRIMARY KEY (id),
  `name` varchar(100),
  `user_acc` varchar(100),
  `password` varchar(64),
  `numberphone` int,
  `location_img` varchar(100)
);

-- CREATE TABLE `user_post` (
--   `id` int NOT NULL auto_increment,
--    PRIMARY KEY (id),
--   `user_id` int,
--   `written_text` varchar(100),
--   `img_location` varchar(100),
--   `link_video` varchar(100),
--   `creted_datatime` datetime
-- );

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

-- ALTER TABLE `user_post` ADD FOREIGN KEY (`user_id`) REFERENCES `user_profile` (`id`);

-- ALTER TABLE `post_like` ADD FOREIGN KEY (`user_id`) REFERENCES `user_profile` (`id`);

-- ALTER TABLE `post_comment` ADD FOREIGN KEY (`user_id`) REFERENCES `user_profile` (`id`);

-- ALTER TABLE `post_like` ADD FOREIGN KEY (`post_id`) REFERENCES `user_post` (`id`);

-- ALTER TABLE `post_comment` ADD FOREIGN KEY (`post_id`) REFERENCES `user_post` (`id`);
