<?php 
  include_once "model/index.php";
  session_start();

  Database::connect();

  //запись значения сортировки из сессии
  if(!isset($_GET['orderby']) && isset($_SESSION['orderby'])){
    $sortBy = $_SESSION['orderby'];
  }

  //запись направления сортировки из сессии
  if(!isset($_GET['ordertype']) && isset($_SESSION['ordertype'])){
    $sortType = $_SESSION['ordertype'];
  }

  //проверка на выбор поля для сортировки
  switch($_GET['orderby']){
    case 'name':
      $sortBy = 'name';
      $_SESSION['orderby'] = $sortBy;
      break;
    case 'email':
      $sortBy = 'email';
      $_SESSION['orderby'] = $sortBy;
      break;
    case 'status':
      $sortBy = 'status';
      $_SESSION['orderby'] = $sortBy;
      break;
  }

  //направление сортировки
   if(isset($_GET['ordertype'])){
     if($_GET['ordertype']=='asc'){
       $_SESSION['ordertype'] = 'asc';
       $sortType ='asc';
     }else{
       $_SESSION['ordertype'] = 'desc';
       $sortType = 'desc';
     }
   }else{
     $sortType = $_SESSION['ordertype'];
   }

  //установка значения ?ordertype= 
  if($sortType == 'asc'){
    $orderTypeForLink = 'desc';
  }else{
    $orderTypeForLink = 'asc';
  }

  //создание пагинации
  $total = Database::select("SELECT COUNT(*) FROM tasks");
  $total = $total[0]['COUNT(*)'];
  $tasksPerPage = 3; //количество заданий на страницу
  $numOfPages = ceil($total/$tasksPerPage);
  $currentPage = $_GET['page'];
  if(!isset($currentPage)){
    $currentPage = 1;
  }
  $offset = ($currentPage - 1) * $tasksPerPage;

  //создание списка задач
if( isset($_GET['ordertype']) || isset($_SESSION['ordertype']) ){
  $db = Database::select("SELECT * FROM tasks ORDER BY ".$sortBy." ".$sortType." LIMIT ".$offset.",3 ");
}else{
 $db = Database::select("SELECT * FROM tasks LIMIT ".$offset.",3 ");
}

