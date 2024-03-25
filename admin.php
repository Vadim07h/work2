<?php
include 'header.php';
require("db.php");
if($_SESSION['role'] == 1) {
    $stmt = $conn->query("select  bids.*, users.name, users.phone,
    users.email from bids inner join users on bids.user_id=users.id");
    $bids = $stmt->fetchAll();
} else {
    header("Location: auth1.php");
}
?>

<div class="container-fluid w-75 mb3 mx-auto">
  <h2 class="text-center p-3">Админпанель</h2>
  <div class="container border">
    <h3>Заявки пользователь:</h3>
    <?php if(isset($_GET['message'])) { if ($_GET['message'] == 'success') {?>
    <div id="liveAlertPlaeholder" class="alert alert-info alert-dismissible fade show" role="alert">
      <i class=" bi bi-check-square" style="color: primary;"></i>
      Статус заявки успешно изменен
    </div>
    <?php } } unset($_GET['message'])?>
    <div class="row row-cols-1 row-cols-md-2 g-4">
     
      <?php $id = 1;
        foreach($bids as $bid) { ?>
      <div class="col">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Заявка № <?=$bid['id']?></h5>
            <h5 class="card-title"><?=$bid['title']?></h5>
            <p class="card-text"><?=$bid['discription']?></p>
            <p class="card-text"><?=$bid['status']?></p>
            <?php if($bid['status'] == 'Новое') {?>
            <a href="update_bid.php?id=<?=$bid['id']?>&status=Подтверждена"
            class="btn btn-outline-success">Подтвердить</a>
            <a href="update_bid.php?id=<?=$bid['id']?>&status=Отменина"
            class="btn btn-outline-danger">отменить</a>
            <?php } ?>  
          </div>          
        </div>
      </div>
      <?php $id++; } ?>
    </div>
  </div>
</div>

<?php
include 'footer.php';
?>