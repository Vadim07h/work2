<?php
session_start();
include 'header.php';
?>


<br>
<div class="modal fade" id="reg" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Регистрация</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
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
        <label for="exampleFormControlInput1" class="form-label">email</label>
        <input type="email" class="form-control" id="email" name="email">
        </div>

        <div class="mb-3">
        <label for="login1" class="form-label">логин</label>
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
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="auth" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Авторизация</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">    
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
    <label for="password" class="form-label">Пароль</label>
    <input type="password" class="form-control" id="password" name="password">
    </div>
    <div class="mb-3 text-center">
        <input type="submit" class="btn btn-success">
    </div>
    </div>
    </form>   
      </div> 
    
    </div>
  </div>
</div>

<div class="modal fade" id="Zayvka" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Оформление заявки</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
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
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<br>

<div class="container text-center">
    <h1>О компании</h1>
    <br>
    <h2>У нас вы сможете починить любую бытовую технику!</h2>
</div>

<br>

<h1 class="text-center my-3">Помощь в использование сайта:</h1>

<div class="row row-cols-1 row-cols-sm-3 g-4">
  <div class="col">
    <div class="card">
      <img src="img/profile.png" class="card-img-top img" alt="img">
      <div class="card-body">
        <p class="card-text">Для того чтоб начать полноценно пользоваться сайтом, нужно зарегистрироваться или войти в свой аккаунт.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="img/reg.png" class="card-img-top img" alt="img">
      <div class="card-body">
        <p class="card-text">Если у вас нет аккаунта, вы переходите на страницу регистрации и после регистрации вас перекидывает на главную страницу.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="img/auth.png" class="card-img-top img" alt="...">
      <div class="card-body">
        <p class="card-text">После этого вы переходите на страницу со входам и водите данные, кот орые указывали при регистрации.</p>
      </div>
    </div>
  </div>
</div>



<br>
<div class="row row-cols-1 row-cols-sm-3 g-4">
  <div class="col">
    <div class="card">
      <img src="img/account.png" class="card-img-top" alt="...">
      <div class="card-body">
        <p class="card-text">После входа в аккаунт у вас появится страница личного кабинета, гле вы сможете посмотреть свои данные, а так же оставить заявку.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="img/bid.png" class="card-img-top" alt="...">
      <div class="card-body">
        <p class="card-text">После отправки заявки, она будет на рассмотрение. Её статус вы сможете увидеть в личном кабинете.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="img/message.png" class="card-img-top" alt="...">
      <div class="card-body">
        <p class="card-text">В ближайшее время администраторы подтвердят или откажут в запросе. При подтверждении с вами свяжутся через почту или звонком.</p>
      </div>
    </div>
  </div>
</div>
<br>

<?php
include 'footer.php';
?>
