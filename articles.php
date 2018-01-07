<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
/** @var \Symfony\Component\DependencyInjection\ContainerBuilder $container */
$container = require __DIR__.'/bootstrap.php';

// 1.
dump(
    $container->get('doctrine')->getRepository(\App\Entity\Article::class)->loadAll()
);

// 2.
dump(
    $container->get('doctrine.repository.article')->loadAll()
);