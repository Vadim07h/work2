<?php
include 'header.php';
?>



<div class="container">
    <h2 class="text-center">вход</h2>
    <form action="auth2.php" class="w-70 mx-auto" method="post">
    <?php   if(isset($_GET['message'])) { ?>
      <div class="mb-3">
        <span class="alert alert-danger">Неверный логин и пароль</span>
      </div>
     <?php } ?>


<div class="mb-3">
  <label for="login1" class="form-label">логин</label>
  <input type="text" class="form-control" id="login" name="login">
</div>
<div class="mb-3">
  <label for="password" class="form-label">password</label>
  <input type="password" class="form-control" id="password" name="password">
</div>
<div class="mb-3 text-center">
    <input type="submit" class="btn btn-success">
</div>
</div>
</form>   

<?php
include 'footer.php';
?>