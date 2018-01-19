<?php
require '../vendor/autoload.php';
$app = new \Slim\App([
    'settings' => [
        'displayErrorDetails' => true
    ]
]);
$container = $app->getContainer();

$container['view'] = function ($container) {
    $view = new \Slim\Views\Twig('../templates/', [
        'cache' => '../tmp/views/',
        'debug'=>true
    ]);
    $basePath = rtrim(str_ireplace('index.php', '', $container['request']->getUri()->getBasePath()), '/');
    $view->addExtension(new Slim\Views\TwigExtension($container['router'], $basePath));

    return $view;
};

$container['db'] = function ($c) {
    $path = dirname(__FILE__)."/db.sqlite";
    $pdo = new PDO("sqlite:$path");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $pdo;
};
