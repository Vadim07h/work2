<?php
session_start();
include 'header.php';
?>


<div class="container">
    <h2 class="text-center">Регистация</h2>
    <form action="registr.php" class="w-70 mx-auto" method="post">

    <div class="mb-3">
  <label for="name" class="form-label">ФИО</label>
  <input type="text" class="form-control" id="name" name="name">
</div>
<div class="mb-3">
  <label for="phone" class="form-label">Телефон</label>
  <input type="text" class="form-control" id="phone" name="phone">
</div>
<div class="mb-3">
  <label for="email" class="form-label">email</label>
  <input type="email" class="form-control" id="email" name="email">
</div>

<div class="mb-3">
  <label for="login" class="form-label">логин</label>
  <input type="text" class="form-control" id="login" name="login">
</div>
<div class="mb-3">
  <label for="password" class="form-label">password</label>
  <input type="password" class="form-control" id="password" name="password">
</div>
<div class="mb-3 text-center">
    <input type="submit" class="btn btn-success" value="Отправить">
</div>
</form>
</div>

<?php
include 'footer.php';
?>




