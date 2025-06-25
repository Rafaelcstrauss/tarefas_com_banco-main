<?php
use Slim\Views\PhpRenderer;

$app->get('/login', function ($request, $response){
    $renderer = new PhpRenderer('../views/login');
    return $renderer->render($response, 'login.php');
});

$app->get('/recuperarsenha', function ($request, $response){
    $renderer = new PhpRenderer('../views/recuperarsenha');
    return $renderer->render($response, 'recuperarsenha.php');
});


$app->get('/cadastrar', function ($request, $response){
    $renderer = new PhpRenderer('../views/cadastrar');
    return $renderer->render($response, 'cadastrar.php');
});