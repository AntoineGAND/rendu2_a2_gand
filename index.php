<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

/** @var \Symfony\Component\DependencyInjection\ContainerBuilder $container */
$container = require __DIR__.'/bootstrap.php';

use App\Entity\User;

/** @var \Doctrine\ORM\EntityManager $em */
$em = $container->get('doctrine');

// 1. Create a User
/** @var \Doctrine\ORM\EntityRepository $userRepository */
$userRepository = $container->get('doctrine.repository.user');

/** @var User $admin */
$admin = $userRepository->findOneBy(['username' => 'admin']);

// 2. Link a User to an Article
/** @var \App\Repository\ArticleRepository $articleRepository */
$articleRepository = $container->get('doctrine.repository.article');

/** @var \App\Entity\Article $article */
$article = $articleRepository->findAll();
dump($article);
dump($admin);

/*
$article->setAuthor($admin);
dump($article);

$em->flush();
*/



