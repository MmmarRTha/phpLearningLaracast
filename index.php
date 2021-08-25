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

class Task
{
    public $description;
    public $completed = false;

    public function __construct($description)
    {
        $this->description = $description;
    }

    public function complete()
    {
        $this->completed = true;
    }

    public function isComplete()
    {
        return $this->completed;
    }
}
$tasks = [
    new Task('Go to the store'),
    new Task('Finish my screencast'),
    new Task('Sweep the floor')
];
$tasks[0]->complete();

require 'index.view.php';
