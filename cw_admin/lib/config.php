<?php
/*define('DB_TYPE','mysql');
define('DB_HOST','localhost');
define('DB_NAME','catch597_avigna');
define('DB_USER','catch597_avigna');
define('DB_PASS','avigna@2016');*/


define('DB_TYPE','mysql');
define('DB_HOST','localhost');
define('DB_NAME','unix');
define('DB_USER','root');
define('DB_PASS','');
$db = new PDO(DB_TYPE.':host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASS);
return($db);