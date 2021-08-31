<?php

require 'vendor/autoload.php';
require 'core/bootstrapping.php';

require Router::load('routes.php')
    ->direct(Request::uri(), Request::method());