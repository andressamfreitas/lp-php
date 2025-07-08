<?php

function carregarController()
{

    $controller = str_replace('/', '', $_SERVER['PATH_INFO']);
    if (!$controller) $controller = 'index';

    if (!file_exists("controllers/{$controller}.controller.php")) {
        http_response_code(404);
        echo "página não existe";
        die();
    }

    require "controllers/{$controller}.controller.php";
}

carregarController();