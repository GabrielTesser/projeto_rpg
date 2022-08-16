<?php

$uri_parse = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

include 'controller/pessoacontroller.php';
include 'controller/fichacontroller.php';

switch($uri_parse)
{
    case '/ficha':
        fichaController::index();
    break;

    case '/ficha/form':
        fichaController::form();
    break;

    case '/ficha/form/save':
        fichaController::save();
    break;

    case '/ficha/delete':
        fichaController::delete();
    break;
}