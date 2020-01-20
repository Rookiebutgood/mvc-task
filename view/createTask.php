<?php
  include_once "controller/createTask.php";
?>
<div class="row justify-content-center h-100 align-items-center">
  <div class="col-md-3">
    <form method="post" class="w-100 h-25 ">
      <h1>Новая задача</h1>
      <?php if($_POST): ?>
        <div class='alert alert-success'>Задача создана. <a href='/'>Перейти к списку задач</a></div>
      <?php endif; ?>
      <input type="text" name="name" placeholder="Имя" class="mx-auto w-100 form-control mb-3" required>
      <input type="email" name="email" placeholder="Email" class="mx-auto w-100 form-control mb-3" required>
      <textarea name="task" placeholder="Задача" class="mx-auto w-100 form-control mb-3" required></textarea>
      <input type="submit" value="Поставить задачу" class="btn btn-outline-secondary">
    </form>
  </div>
</div>