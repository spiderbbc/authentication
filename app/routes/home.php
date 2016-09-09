<?php



$app->get('/',function() use ($app){
  #echo "Hello from route";
  $app->render('home.php');
})->name('home');
