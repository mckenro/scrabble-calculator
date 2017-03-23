<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Scrabble.php";

    // use Symfony\Component\Debug\Debug;
    // Debug::enable();

    $app = new Silex\Application();

    // $app['debug'] = true;

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views'
));

    $app->get("/", function() use ($app) {
    return $app['twig']->render('index.html.twig');
});
    $app->post("/result", function() use ($app) {
      $user_word = $_POST['scrabble-word'];
      $scrabble_word = new Scrabble;
      return $app['twig']->render('index.html.twig', array('result' => $scrabble_word->letterValue($user_word), 'randomWord' => ($user_word)));
    });
    return $app;

 ?>
