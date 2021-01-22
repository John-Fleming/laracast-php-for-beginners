<?php

class Connection 
{
  public static function make()
  {
    $db   = 'MyDB';
    $user = 'root';
    $pass = '';

    try {
         return new PDO('mysql:host=127.0.0.1;dbname=' . $db, $user, $pass);
    } catch (PDOException $e) {
         die($e->getMessage());
    }
  }
}
