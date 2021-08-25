<?php
require 'functions.php';

$greeting = 'Hello, World with PHP';

$names = [
    'Martha',
    'Raul',
    'Brenda'
];

$person = [
    'name' => 'Martha Nieto',
    'fave color' => 'green',
    'career' => 'Software developer'
];
//se agrega al arreglo
$person['age'] = '?';

//se quita del arreglo
unset($person['age']);

$task = [
    'title'=> 'Finish homework',
    'due' => 'today',
    'assigned_to' => 'Martha',
    'completed' => true
    ];

require 'index.view.php';
