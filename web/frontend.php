<?php
require __DIR__."/../apps/autoload.php";

$app = new \SayHello\SayHelloApplication();
$app->setName("SayHello");
$app->run();