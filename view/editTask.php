<?php
include_once "controller/editTask.php";
?>




<div class="row justify-content-center h-100 align-items-center">
  <div class="col-md-3">
    <form method="post" class="w-100 h-25">
      <h1>Редактировать задачу</h1>
      <div class="form-check mb-3">
        <input type="checkbox" name="status" value=1 class="form-check-input" <?php if($data['status']==1){print checked;}?> >
        <label for="status" class="form-check-label">Выполнено</label>
      </div>
      <input type="text" name="name" value = <?php print $data['name']?> class="mx-auto w-100 form-control mb-3">
      <input type="text" name="email" value = <?php print $data['email']?> class="mx-auto w-100 form-control mb-3">
      <textarea name="task" class="mx-auto w-100 form-control mb-3"><?php print $data['task']?></textarea>
      <input type="submit" value="Сохранить" class="btn btn-outline-secondary">
    </form>
  </div>
</div>