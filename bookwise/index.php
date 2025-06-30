<?php
echo 'sempre cai no index.php';

$controller = 'index';
// echo "<pre>";
// var_dump($_SERVER);
// echo "</pre>";

if (isset($_SERVER['PATH_INFO'])) {
    $controller =str_replace('/','', $_SERVER['PATH_INFO']);
}
// isset = verifica se a chave existe no array.


require "controllers/{$controller}.controller.php";
?>
