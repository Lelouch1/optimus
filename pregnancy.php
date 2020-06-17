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
            <h1> Планирование беременности</h1>
            <div class="text-img">
              <div class="text">
                <p>Это процесс подготовки к зачатию, включающий в себя полное обследование пары, выявление и лечение заболеваний, которые могут негативно сказаться на протекании беременности и на здоровье будущего малыша.
                  <br>
                  <br> Конечно, планирование беременности требует от пары немалой силы воли. Ведь приходится пересматривать свой образ жизни, отказываться от вредных привычек, проходить различные обследования. Но рождение здорового наследника того стоит!
                  <br>
                  <br> Наши квалифицированные гинекологи помогут спланировать беременность, в нашем центре пара сможет сдать все необходимые анализы для оптимального планирования беременности. Доверьте защиту своего женского здоровья профессиональным врачам! Хотите здорового малыша — планируйте беременность.</p>
              </div>
              <div class="image"><img src="img/pregnancy.png" alt="Планирование беременности"></div>
            </div>
            <div class="price">
              <h2>Стоимость процедуры</h2>
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col" class="caption-table">Услуга</th>
                      <th scope="col" class="price-table">Цена</th>
                      <th scope="col" class="more-table"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Прием (осмотр, консультация) врача акушера-гинеколога</td>
                      <td>3333 руб.</td>
                      <td><a href="#">Подробнее об услуге</a></td>
                    </tr>
                    <tr>
                      <td>УЗИ органов малого таза у женщин (в том числе при сроке беременности до 10 недель включительно)</td>
                      <td>1322 руб</td>
                      <td><a href="#">Подробнее об услуге</a></td>
                    </tr>
                    <tr>
                      <td>Online-консультация врача акушера-гинеколога </td>
                      <td>1322322 руб</td>
                      <td><a href="#">Подробнее об услуге</a></td>
                    </tr>
                    <tr>
                      <td>Программа Check-up для женщин: базовый </td>
                      <td>3333 руб.</td>
                      <td><a href="#">Подробнее об услуге</a></td>
                    </tr>
                    <tr>
                      <td>Программа Check-up для женщин: расширенный </td>
                      <td>3333 руб.</td>
                      <td><a href="#">Подробнее об услуге</a></td>
                    </tr>
                  </tbody>
                </table>
              </div><a href="#" class="btn">Записаться на приём</a> </div>
            <h3>Специалисты</h3>
            <?php include ('modules/specialists.php'); ?>
          </div>
          <?php include ('modules/mainform.php'); ?>
            <div class="container">
              <div class="procedure">
                <h2>Описание процедуры</h2>
                <p>Клинико-диагностический центр «Лаборатория Здоровья» - это современная клиника ДЛЯ ТЕХ, КТО ЦЕНИТ РЕПУТАЦИЮ, ЗДОРОВЬЕ И ВРЕМЯ. Мы предлагаем индивидуальный подход и чуткое отношение к каждому клиенту, уютный интерьер, современное оборудование, доступные цены и гибкую систему скидок. С нами Вы забудете об очередях. Пройти все процедуры и сделать необходимые анализы теперь можно в одном месте!</p>
                <?php include ('modules/center-advantages.php'); ?>
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