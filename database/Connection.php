<?php

class Connection
{
    public static function make()
    {
        try {
            return new PDO('mysql:host=localhost;dbname=mytodo', 'root', '');
        }catch (PDOException $exception) {
            die($exception->getMessage());
        }
    }
}