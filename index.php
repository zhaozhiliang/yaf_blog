<?php

define('APPLICATION_PATH', dirname(__FILE__));
define('BASE_URL',"http://z.blog.yaf.com/");
define('CACHE_TIME', 3600);
define('IP',"123.57.52.70");

$application = new Yaf_Application( APPLICATION_PATH . "/conf/application.ini");

$application->bootstrap()->run();
?>
