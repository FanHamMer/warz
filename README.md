# SA-MP-PHP-WarZ

! KOREA GTA SAN ANDREAS <br /> 
a. myprofile <br/>
b. feedback <br />└ sql <br/>
CREATE TABLE `feedback` (
  `f_id` int(11) NOT NULL,
  `f_ip` text CHARACTER SET latin1 NOT NULL,
  `f_name` varchar(20) CHARACTER SET latin1 NOT NULL,
  `f_adddate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `f_contents` varchar(200) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=euckr;
ALTER TABLE `feedback`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT; </br>
  ALTER TABLE `feedback`
  ADD PRIMARY KEY (`f_id`);<br/>
c. update log <br/>


<p align="center"><img src="https://github.com/getsolaris/SA-MP-PHP-WarZ/blob/master/myprofile.png"></p>
<p align="center"><img src="https://github.com/getsolaris/SA-MP-PHP-WarZ/blob/master/feedback.png"></p>
<p align="center"><img src="https://github.com/getsolaris/SA-MP-PHP-WarZ/blob/master/up_log.png"></p>
