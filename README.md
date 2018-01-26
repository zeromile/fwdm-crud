# fwdm-crud #
Fresno Web Dev Meetup CRUD code

Just the "C" and "R", plus html "U" and "D" pages of our CRUD "app"

Master branch contains the final app


## Run this in mysql... ##

CREATE TABLE `crud` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `email_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `crud`
  ADD PRIMARY KEY (`id`);
--
-- AUTO_INCREMENT for table `crud`
--
ALTER TABLE `crud`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
