<?php

require __DIR__ . str_replace("/",DIRECTORY_SEPARATOR, "/../vendor/autoload.php");

$request = new App\Http\Request;
$request->send();