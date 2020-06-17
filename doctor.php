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
            <div class="specialists doctor-card">
              <div class="item"> <img src="img/specialists/4.jpg" alt="">
                <div class="text">
                  <h1>Бескровная Оксана Владиславовна</h1>
                  <h2>Врач-терапевт высшей квалификационной категории.</h2>
                  <div class="experience">Стаж: 9 лет</div>Клинико-диагностический центр «Лаборатория Здоровья» - это современная клиника ДЛЯ ТЕХ, КТО ЦЕНИТ РЕПУТАЦИЮ, ЗДОРОВЬЕ И ВРЕМЯ. Мы предлагаем индивидуальный подход и чуткое отношение к каждому клиенту, уютный интерьер, современное оборудование, доступные цены и гибкую систему скидок. С нами Вы забудете об очередях. Пройти все процедуры и сделать необходимые анализы теперь можно в одном месте!<a href="#" class="btn">Записаться на приём</a> </div>
              </div>
            </div>
          </div>
          <?php include ('modules/mainform.php'); ?>
            <div class="container">
              <div class="procedure">
                <br>
                <?php include ('modules/doctor-info.php'); ?>
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
      <script src="js/main.js"></script>
      <script>
      </script>
</body>

</html>