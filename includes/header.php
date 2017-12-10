<?php
require(__DIR__.'/../Twig/twig.php');
//$pp = new prout();
$loader = new Twig_Loader_Filesystem(__DIR__.'/../templates');
$twig = new Twig_Environment($loader, array(
// Uncomment the line below to cache compiled templates
//     // 'cache' => __DIR__.'/../cache',
     ));
