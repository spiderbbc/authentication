
<?php
use Slim\Slim;
use Slim\Views\Twig;
use Slim\Views\TwigExtension ;

use Noodlehaus\Config;
use \Authentication\User\User;

session_cache_limiter(false);
session_start();



define('INC_ROOT', dirname(__DIR__));

#echo INC_ROOT;
require_once INC_ROOT.'/vendor/autoload.php';

$app = new Slim([
    'mode' => file_get_contents(INC_ROOT . '/mode.php'),
    'view' => new Twig(),
    'templates.path' => INC_ROOT.'/app/views'
]);


#echo $app->mode;
#echo INC_ROOT.'/app/config/'.trim($app->mode).'.php';



# utilizando la libreria de configuracion de vendor/hassankhan

/*
$app->configureMode($app->config('mode'), function() use ($app){
    $app->config = Config::load(INC_ROOT."app/config/{$app->mode}.php");
});
*/


#var_dump($app->config);
# manera de sobre escribir el config 'mode' de app
$app->configureMode($app->config('mode'), function() use ($app){
  $app->config = Config::load(INC_ROOT.'/app/config/'.trim($app->mode).'.php');
});

# como accedemos a las opciones del config utilizando la libreria hassankhan
#echo $app->config->get('db.driver');

require_once 'database.php';
require_once 'routes.php';

# instanciamos mediante nanespace y autoloader del composer(composeer.json)
#$user = new \Authentication\User\User;
$app->container->set('user',function (){
  return new User;
});

#var_dump($app->user);

$view = $app->view();

$view->parserOption = [
  'debug'=> $app->config->get('twig.debug')
];

$view->parserExtensions = [
  new TwigExtension

];


# una vista simple
/*
$app->get('/', function() use($app) {
    $app->render('home.php');
});
*/
