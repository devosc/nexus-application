<?php
/**
 *
 */

use Mvc5\Plugin\App;
use Mvc5\Plugin\Args;
use Mvc5\Plugin\Config;
use Mvc5\Plugin\Factory;
use Mvc5\Plugin\FileInclude;
use Mvc5\Plugin\Invoke;
use Mvc5\Plugin\Invokable;
use Mvc5\Plugin\Link;
use Mvc5\Plugin\Param;
use Mvc5\Plugin\Plug;
use Mvc5\Plugin\Plugin;
use Mvc5\Plugin\Service;
use Mvc5\Plugin\Session;
use Mvc5\Plugin\Shared;
use Mvc5\Plugin\Value;
use Service\Provider;

return [
    'About\Controller' => [About\Controller::class, 'A PHP Web Application'],
    'dashboard'  => new App(new FileInclude(__DIR__ . '/dashboard.php')), //, null, true),
    'Home\Controller' => fn() => new Home\Controller($this),
    //'Home\Controller' => [Home\Controller::class, new Link],
    //'Home\Controller' => new Factory(Home\Factory::class),
    //'Home\Controller' => new \Plugin\Controller(Home\Controller::class), //custom plugin
    //'Home\Controller' => Home\Controller::class,
    //'Home\Controller' => 'dashboard->home',

    'Home\ViewModel' => [Home\ViewModel::class, new Args(['message' => new Plug('message')])],

    'message' => new Value('Application Home'), //string value

    'service\provider' => [Provider::class, new Config],

    'web\authenticate' => Middleware\Authenticate::class,
    'web\authorize' => Middleware\Authorize::class,
    'web\log' => Middleware\Logger::class,

    //middleware
    //'web' => 'http\middleware',

    //'layout' => new Shared('layout', [Mvc5\View\SharedLayout::class, 'template' => 'layout']),

    'about/more/messages' => new About\More\Messages\ViewModel(['more' => ' ...']),

] + (include __DIR__ . '/../vendor/mvc5/view/config/service.php')
  + (include __DIR__ . '/../vendor/mvc5/http-message/config/service.php')
  + include __DIR__ . '/../vendor/mvc5/mvc5/config/service.php';
