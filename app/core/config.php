<?php


/*set database variables*/

define('DNS', "mysql:host=localhost;dbname=student");
define('USR', "root");
define('PASS', "");


/*protocal type http or https*/
define('PROTOCAL', 'http');

/*root and asset paths*/

$path = dirname(__DIR__);
// $path = str_replace("jj", "", $path);

define('ROOT', str_replace("\app", "\public\assets", $path));
define('ASSETS', "../app/views/assets/");
