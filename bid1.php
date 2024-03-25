<?php
include'header.php';
?>

<div class="container">
    <h2 class="text-center">Оформление заявки</h2>
    <form action="bid2.php" class="w-70 mx-auto" method="post">
        <div class="mb-3">
            <label for="title" class="form-label">Название бытовой техники</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Описание проблемы</label>
            <textarea class="form-control" id="description" name="description"></textarea>
        </div>
        <div class="mb-3">
            <label for="adress" class="form-label">Адрес</label>
            <input type="text" class="form-control" id="adress" name="adress">
        </div>
        <div class="mb-3 text-center">
            <input type="submit" class="btn btn-success" value="Отправить">
        </div>
    </form>
</div>

<?php
include 'footer.php';
?>