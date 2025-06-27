<?php
require 'dados.php';
$id = $_REQUEST['id'];
$filtrado = array_filter($livros, function($l) use($id) {
    return $l['id'] == $id;
});
$livro = array_pop($filtrado);
$view = "livro";
require "views/template/app.php";
// echo "<pre>";
// var_dump($_SERVER);
// echo "</pre>";
// var_dump($livro);

// $livro = array_filter($livros, function($l) use($id) {
//     var_dump($l['id']);
//     return $l['id'] == $id;

// echo "<pre>";
// var_dump($livro);
// echo "</pre>";
?> 
