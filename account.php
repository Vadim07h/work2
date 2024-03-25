<?php
session_start();
include 'header.php';

require("db.php");
$stmt = $conn->prepare("SELECT * FROM `bids` where user_id=?");
$stmt->execute([$_SESSION['user_id']]);
$bids = $stmt->fetchAll();
?>


<div class="container-fluid w-75 mb-3 mx-auto">
  <h2 class="text-center p-3">Личный кабинет</h2>
  <?php   if(isset($_GET['message'])) { ?>
      <div class="mb-3">
        <span class="alert alert-info">Вы успешно авторизованы!</span>
      </div>
     <?php } ?>
  <div class="container border bg-success-subtle p-3">
    <a href="bid1.php" data-bs-toggle="modal" data-bs-target="Zayvka" class="btn btn-success">Новая заявка</a>
    <h3>Ваши заявки:</h3>

    <div class="row row-cols-1 row-cols-md-2 g-4">
     
      <?php
        foreach($bids as $bid) {
      ?>
      <div class="col">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Заявка № <?=$bid['id']?></h5>
            <h5 class="card-title"><?=$bid['title']?></h5>
            <p class="card-text"><?=$bid['discription']?></p>
            <p class="card-text"><?=$bid['status']?></p>
          </div>
        </div>
      </div>
      <?php
        }
      ?>
    </div>
  </div>
</div>

<?php
include 'footer.php';
?>