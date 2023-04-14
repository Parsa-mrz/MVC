<?php
// ! front controller

use App\Core\Request;
use App\Core\Routing\Route;

include('bootstrap/init.php');

$router = new App\Core\Routing\Router($request);