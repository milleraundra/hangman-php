<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Hangman.php";

    // session_start();
    // if(empty($_SESSION['list_of_albums'])) {
    //     $_SESSION['list_of_albums'] = array();
    // }

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path'=> __DIR__.'/../views'));

    $app->get('/', function() use ($app) {
        $hangman_word = randomWord();
        $hangman_game = new Hangman($hangman_word);
        $newWord = $hangman_game->getWord();
        $dashes = $hangman_game->wordToDashes($newWord);
        echo $dashes;
        return $app['twig']->render('index.html.twig', array('game'=> $hangman_game));
    });

    // $app->post('/')

    return $app;
 ?>
