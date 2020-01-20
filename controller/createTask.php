<?php
include_once('model/index.php');

//выполнять запрос в бд, если форма была отправлена 
if($_POST){

  Database::connect();

//функция для экранирования ввода 
  function makeSafe($input) {
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
  }

  $name = makeSafe($_POST['name']);
  $email = makeSafe($_POST['email']);
  $task = makeSafe($_POST['task']);

  Database::change("INSERT INTO tasks (name, email, task) VALUES ('$name', '$email', '$task')");

}