<?php
include_once "controller/login.php";
?>

<div class="row justify-content-center h-100 align-items-center">
  <div class="col-md-3">
    <form method="post" class="w-100 h-25">
      <h1>Вход</h1>
      <input type="text" name="name" placeholder="Логин" class="mx-auto w-100 form-control mb-3" required>
      <input type="password" name="password" placeholder="Пароль" class="mx-auto w-100 form-control mb-3" required>
      <input type="submit" value="Войти" class="btn btn-outline-secondary">
      <span> <?php print $message; ?> </span>
    </form>
  </div>
</div>
