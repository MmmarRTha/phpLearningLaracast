<?php

$app = [];
<<<<<<< HEAD

$app['config'] = require 'config.php';
=======
$app['$config'] = require 'config.php';
>>>>>>> main

require 'core/Router.php';
require 'core/Request.php';
require 'core/database/Connection.php';
require 'core/database/QueryBuilder.php';


$app['database'] = new QueryBuilder(
    Connection::make($app['config']['database'])
);
