<!DOCTYPE html>
<html lang="ru">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Optimus Medicus</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" href="css/slick.css">
  <link rel="stylesheet" href="css/slick-theme.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css"> </head>

<body>
  <?php include 'modules/header.php' // шапка ?>
    <section class="other-page">
      <?php include('modules/breadcrumb.php'); ?>
        <div class="main-screen ">
          <div class="container">
            <h1>Контакты</h1>
            <div class="text-img">
              <ul class="contacts">
                <li><img src="img/icons/location.svg" alt="location">
                  <p>163000, г. Архангельск, ул. Попова, д. 34</p>
                </li>
                <li><img src="img/icons/phone.svg" alt="phone">
                  <p>+7 (8182) 44-44-84</p>
                </li>
                <li><img src="img/icons/mail.svg" alt="mail">
                  <p>info@lz29.ru</p>
                </li>
                <li><img src="img/icons/time.svg" alt="time">
                  <p>Пн-Пт:<span>07:30 - 20:00</span>
                    <br> Сб:<span>09:00 - 15:00</span>
                    <br> Вс:<span>09:00 - 12:00</span> </p>
                </li>
              </ul>
              <div id="map"></div>
            </div>
          </div>
        </div>
    </section>
    <?php include ('modules/footer.php') ?>
      <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
      <script src="js/slick.min.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
      <script src="https://api-maps.yandex.ru/2.1/?apikey=bae32231-dd0d-4888-8a46-e9ccb03168c0&lang=ru_RU" type="text/javascript">
      </script>
      <script src="js/map.js"></script>
      <script src="js/main.js"></script>
      <script>
      </script>
</body>

</html>