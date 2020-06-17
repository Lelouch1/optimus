<footer>
  <nav class="navbar-expand-lg navbar-light bg-light" id="navFooter">
    <div class="collapse navbar-collapse" id="navbarTogglerFooter">
      <ul class="nav">
        <div class="container">
          <li class="nav-item"> <a class="nav-link active" href="./index.php">Главная</a> </li>
          <li class="nav-item"> <a class="nav-link" href="#">О центре</a> </li>
          <li class="nav-item"> <a class="nav-link" href="#">Услуги</a> </li>
          <li class="nav-item"> <a class="nav-link" href="#">Прайс</a> </li>
          <li class="nav-item"> <a class="nav-link" href="#">Полезная информация</a> </li>
          <li class="nav-item"> <a class="nav-link" href="#">Контакты</a> </li>
        </div>
      </ul>
    </div>
  </nav>
  <div class="logo-contacts">
    <div class="container">
      <a href="./index.php" class="logo"><img src="img/logo.svg" alt="logo"></a>
      <div class="contacts">
        <div class="item"> <img src="img/icons/location.svg" alt="location">
          <p>163000, г. Архангельск,
            <br>ул. Попова, д. 34</p>
        </div>
        <div class="item"> <img src="img/icons/phone.svg" alt="location">
          <p>+7 (8182) 44-44-84</p>
        </div>
        <div class="item"> <img src="img/icons/mail.svg" alt="location">
          <p>info@lz29.ru</p>
        </div>
      </div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerFooter" aria-controls="navbarTogglerFooter" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
    </div>
  </div>
  <div class="top-header">
    <div class="container">
      <div class="icons">
        <a href="#"><img src="img/icons/whatsapp.svg" alt="whatsapp"></a>
        <a href="#"><img src="img/icons/viber.svg" alt="viber"></a>
        <a href="#"><img src="img/icons/tg.svg" alt="tg"></a>
      </div> <a href="tel:+79115544484" class="phone">+7 (911) 554-44-84</a>
      <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"> Заказать обратный звонок </button>
    </div>
  </div>
</footer>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Обратный звонок</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
      </div>
      <div class="modal-body">
        <form action="#" method="post">
          <div class="form-group">
            <label for="surname">Фамилия</label>
            <input type="text" name="surname" class="form-control" id="surname" required> </div>
          <div class="form-group">
            <label for="phone">Телефон</label>
            <input type="text" name="phone" class="form-control tel" id="phone" required> </div>
          <div class="form-group">
            <input type="submit" class="btn" value="Перезвоните мне"> </div>
        </form>
      </div>
    </div>
  </div>
</div>