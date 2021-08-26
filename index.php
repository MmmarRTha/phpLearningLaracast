<?php

$query = require 'bootstrapping.php';
require 'Task.php';

$tasks = $query->selectAll('todos', 'Task');


require 'index.view.php';

