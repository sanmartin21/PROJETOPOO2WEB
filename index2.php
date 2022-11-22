<?php
 
require __DIR__ . '/vendor/autoload.php';

use App\Controller\ControllerDatabase2;

    $database = new ControllerDatabase2();
    $database->gerarJSON();
