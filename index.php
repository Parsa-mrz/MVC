<?php
// ! front controller

use App\Core\Request;
use App\Core\Routing\Route;
use App\Core\Routing\Router;

include('bootstrap/init.php');

echo"<pre>";

$router = new Router($request);
$router->run();