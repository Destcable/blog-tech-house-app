<?php
require 'vendor/autoload.php';

require_once 'app/Controllers/WelcomeController.php';
require_once 'app/Controllers/PostController.php';
require_once 'app/Models/PostModel.php';
require_once 'app/utils/Response.php';

require_once 'app/routes/web.php';

use Pecee\SimpleRouter\SimpleRouter;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type");

SimpleRouter::enableMultiRouteRendering(false);
SimpleRouter::start();