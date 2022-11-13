<?php
 
require __DIR__ . '/vendor/autoload.php';

use App\Controller\ControllerDatabase;

    $database = new ControllerDatabase();
    $database->gerarJSON();
