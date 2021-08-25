<?php

function connectToDb()
{
    try {
        return new PDO('mysql:host=localhost;dbname=mytodo', 'root', '');
    }catch (PDOException $exception) {
        die($exception->getMessage());
    }
}

function fetchAllTasks($pdo)
{
    $statement = $pdo->prepare('select * from todos');
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
}

function dd($data)
{
    echo '<pre>';
    die(var_dump($data));
    echo '</pre>';
}