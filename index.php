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
    <section class="main">
      <div class="main-screen">
        <div class="container">
          <h1>Cовременная клиника</h1>
          <div class="caption">ДЛЯ ТЕХ, КТО ЦЕНИТ
            <br>РЕПУТАЦИЮ, ЗДОРОВЬЕ
            <br>И ВРЕМЯ</div> <a href="#" class="btn">Наши специалисты</a> </div>
      </div>
      <?php  include('modules/special-svg.php'); ?>
        <div class="our-specialists">
          <div class="container">
            <h3><span>Наши</span> специалисты</h3>
            <?php include('modules/specialists.php'); ?> <a href="#" class="btn">Все специалисты</a> </div>
        </div>
        <div class="our-advantages">
          <div class="container">
            <h3><span>Наши</span> преимущества</h3>
            <?php include('modules/our-advantages.php'); ?>
          </div>
        </div>
        <div class="questions-specialists">
          <div class="container">
            <div class="headline"><span>Вопросы</span> специалистам</div>
            <?php include('modules/questions.php'); ?> <a href="#" class="btn">Все вопросы</a> </div>
        </div>
        <div class="stocks">
          <div class="headline"><span>Акции</span> нашей клиники</div>
          <?php include('modules/stocks.php'); ?>
        </div>
        <div class="about">
          <div class="container">
            <div class="headline"><span>О</span> клинике</div>
            <div class="text">
              <p> Клинико-диагностический центр «Лаборатория Здоровья» - это современная клиника ДЛЯ ТЕХ, КТО ЦЕНИТ РЕПУТАЦИЮ, ЗДОРОВЬЕ И ВРЕМЯ.
                <br>Мы предлагаем индивидуальный подход и чуткое отношение к каждому клиенту, уютный интерьер, современное оборудование, доступные цены и гибкую систему скидок. С нами Вы забудете об очередях. Пройти все процедуры и сделать необходимые анализы теперь можно в одном месте! </p>
              <?php include ('modules/center-advantages.php'); ?>
                <div class="text-img"> <img src="img/house.png" alt="Дом">
                  <p> Удобство расположения. Мы находимся в самом центре Архангельска, на пересечении пр. Советских Космонавтов и ул. Попова.
                    <br>
                    <br> Широкий спектр предоставляемых услуг. К Вашим услугам приемы по акушерству, гинекологии, кардиологии, эндокринологии, терапии и другим направлениям. А также более 1500 лабораторных исследований (медицинских анализов)!
                    <br>
                    <br> Квалифицированный персонал. В нашей команде ведущие врачи г. Архангельска и области, имеющие ученые степени и успешную лечебную практику. Наши специалисты постоянно совершенствуют свои знания и навыки и вводят новые методики в свой арсенал.
                    <br>
                    <br> Хорошая репутация. Благодаря профессионализму персонала и высокому качеству оказываемой медицинской помощи, наш центр имеет множество положительных отзывов от пациентов, которые наблюдаются, лечатся и проходят профилактические обследования у нас, а также советуют клинику своим родственникам, друзьям и знакомым. </p>
                </div>
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
</body>

</html>