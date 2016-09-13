<?php
 require_once __DIR__."/../vendor/autoload.php";
 require_once __DIR__."/../src/Allergies.php";
 date_default_timezone_set('America/Los_Angeles');

 use Symfony\Component\Debug\Debug;
 Debug::enable();


 $app = new Silex\Application();

 $app['debug'] = true;

 $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
  ));

  $app->get("/", function() use ($app){
   return $app['twig']->render('home.html.twig');
  });

  $app->post('/results', function() use($app) {
   $input = $_POST['inputNum'];
   $newAllergies = new Allergies;
   $outputs = $newAllergies->countAllergies($input);
   return $app['twig']->render('results.html.twig', array('outputs'=>$outputs));
  });

  return $app;
?>
