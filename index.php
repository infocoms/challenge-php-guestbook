<?php


declare(strict_types=1);
ini_set('display_errors', "1");
ini_set('display_startup_errors', "1");
error_reporting(E_ALL);


require 'Controller/GuestController.php';
require 'Model/PostLoader.php';
require 'Model/Post.php';



$controller = new GuestController();
$controller->render();