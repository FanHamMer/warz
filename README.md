# SA-MP PHP WARZ

## START

##### Setup file
    MySQL
    Apache
    
    Program List
    - Bitnami
    - Xampp
    
##### file introduce    
    
    
 ### infomation
 - host : localhost
 - php version : 5.6.29
 - db name : warz
 - user db name : players.sql
 - feedback db name : feedback.sql
   
    
## feedback sql
>#### 
REATE TABLE feedback ( f_id int(11) NOT NULL, f_ip text CHARACTER SET latin1 NOT NULL, f_name varchar(20) CHARACTER SET latin1 NOT NULL, f_adddate timestamp NULL DEFAULT CURRENT_TIMESTAMP, f_contents varchar(200) CHARACTER SET utf8 NOT NULL ) ENGINE=InnoDB DEFAULT CHARSET=euckr; ALTER TABLE feedback MODIFY f_id int(11) NOT NULL AUTO_INCREMENT; 
ALTER TABLE feedback ADD PRIMARY KEY (f_id);


