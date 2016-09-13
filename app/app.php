<?php
 require_once __DIR__."/../vendor/autoload.php";
 require_once __DIR__."/../src/CoinCombination.php";
 date_default_timezone_set('America/Los_Angeles');

 $app = new Silex\Application();

 $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
  ));
