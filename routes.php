<?php

$router->get('', 'controllers/index.php');
$router->get('about', 'controllers/about.php');
$router->get('contact', 'controllers/contact.php');
$router->post('add-name', 'controllers/add-name.php');

//var_dump($router->routes);
