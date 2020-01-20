<?php
include_once('model/index.php');

Database::connect();

if($_GET['key']){
    $key = $_GET['key'];
    $data = Database::select("SELECT * FROM tasks WHERE number=".$key);
    $data = $data[0];
}

if($_POST){
    //Получаем текст задачи из базы и из формы
    $newTask = $_POST['task'];
    $oldTask = $data['task'];
    
    //Если они различаются, то пишем в базу текст с формы
    if($newTask != $oldTask ){
        $changed = 1;
        Database::change("UPDATE tasks SET task ='$newTask', changed ='$changed', status = '$status' WHERE number=".$key);
    }

    //Проверяем значение чекбокса выполнено, пишем его состояние в базу
    if(isset($_POST['status'])){
      Database::change("UPDATE tasks SET status = 1 WHERE number=".$key);
    }else{
      Database::change("UPDATE tasks SET status = 0 WHERE number=".$key);
    }

    header("Location: /");
}

?>