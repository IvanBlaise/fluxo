<?php 
session_start();
require_once("vendor/autoload.php");

use \Slim\Slim;
use \Fsolutions\Page;


$app = new Slim();

$app->config('debug', true);


require_once("site.php");



$app->run();

 ?>