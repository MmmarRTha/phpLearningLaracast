<?php
require 'core/bootstrapping.php';

<<<<<<< HEAD
=======
require 'core/bootstrapping.php';

>>>>>>> main
require Router::load('routes.php')
    ->direct(Request::uri());
