<?php


require_once '../vendor/autoload.php';
$products = ['fraise', 'kiwi', 'banane', 'framboise', 'pomme'];
//use Twig\Loader\FilesystemLoader;

$loader = new Twig\Loader\FilesystemLoader('../src/views');
$twig = new Twig\Environment($loader, [
    'cache' => false,
]);
echo $twig->render('index.html.twig', ['products' => $products]);


