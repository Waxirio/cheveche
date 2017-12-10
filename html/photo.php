<?php
require(__DIR__.'/../Twig/twig.php');
$loader = new Twig_Loader_Filesystem(__DIR__.'/../templates');
$twig = new Twig_Environment($loader, array(
));

//on parcours le dossier motion pour voir les photos 
$dir = "../motion/";
//chdir($dir);
array_multisort(array_map('filemtime', ($files = glob($dir."*.{jpg,png,gif}", GLOB_BRACE))), SORT_DESC, $files);
//print_r($files);

echo $twig->render('photo.twig',array('files'=>$files));
