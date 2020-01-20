<?php
include_once "controller/tasksList.php";
?>

<div class="row justify-content-center h-100 mt-3">
  <div class="w-50">
    <?php if($_SESSION['role']=="admin"): ?>
      <a href="logout" class="btn btn-outline-secondary">Выйти</a>
    <?php else: ?>
      <a href="login" class="btn btn-outline-secondary">Войти</a>
    <?php endif; ?>

<h1 class="text-center">Текущий список задач</h1>

<ul class="nav justify-content-center">
  <li class="nav-item">
    <a href=<?php print $_SERVER['PHP_SELF'].'?orderby=name&ordertype='.$orderTypeForLink ?> class="nav-link"> Сортировать по имени </a>
  </li>
  <li class="nav-item">
    <a href=<?php print $_SERVER['PHP_SELF'].'?orderby=email&ordertype='.$orderTypeForLink ?> class="nav-link"> Сортировать по Email </a>
  </li>
  <li class="nav-item">
    <a href=<?php print $_SERVER['PHP_SELF'].'?orderby=status&ordertype='.$orderTypeForLink ?> class="nav-link"> Сортировать по статусу </a>
  </li>
</ul>

<a href="create" class="btn btn-outline-secondary mb-3">Добавить задачу</a>

<?php foreach($db as $data): ?>
  <div class="card border-info mb-3 w-100">
    <div class="card-header">
      <?php if( $data['changed']==1): ?>
        <span class="badge badge-secondary">Отредактировано администратором</span>
      <?php endif; ?>
      <?php if( $data['status']==1): ?>
        <span class="badge badge-success">Выполнено</span>
      <?php else: ?>
        <span class="badge badge-danger">Не выполнено</span>
      <?php endif; ?>
      <?php if( $_SESSION['role'] =="admin" ): ?>
        <a href=<?php print "edit?key=".$data['number'];?> class="float-right">Редактировать</a>
      <?php endif; ?>
    </div>
  <div class="card-body text-info">
    <h5 class="card-title"><?php print $data['name'];?></h5>
    <h6 class="card-subtitle mb-2 text-muted"><?php print $data['email'];?></h6>
    <p class='card-text'><?php print $data['task'];?></p>
  </div>
</div>
<?php endforeach; ?>

<?php if($numOfPages>1):?>
<ul class="pagination">
<?php for($num = 1; $num <= $numOfPages; $num++): ?>
  <li class="page-item">
    <a class="page-link" href=<?php print $_SERVER['PHP_SELF'].'?page='.$num?> > <?php print $num?> </a>
  </li>
<?php endfor; ?>
</ul>
<?php endif;?>
  </div>
</div>