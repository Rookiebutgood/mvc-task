<?php
include_once "model/index.php";

//выполнять запрос в бд, если форма была отправлена 
if($_POST){
  Database::connect();

  $name = $_POST['name'];
  $password = $_POST['password'];
  
  $data = Database::select("SELECT * FROM users WHERE name = '$name' AND password='$password'");
  
  //проверка на наличие пользователя
  if(sizeof($data)==1){
    session_start();
    $_SESSION['role'] = 'admin';
    header("Location: /");
  }else{
    $message = 'Возможно Вы ошиблись?'; //сообщение для формы
  }
}