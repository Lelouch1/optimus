if (document.querySelector('.sliders-cards')) {
  var cardCount = document.querySelector('.sliders-cards > .container > .slider').childElementCount;
  cardCount >= 5 ? cardCount = 5 : cardCount = cardCount + 1;
}
$('.slider').slick({
  // Главный слайдер
  slidesToShow: cardCount
  , slidesToScroll: 1
  , dots: cardCount >= 5 ? true : false
  , arrows: false
  , focusOnSelect: true
  , infinite: true
  , speed: 300
  , autoplay: true
  , autoplaySpeed: 2000
  , responsive: [
    {
      breakpoint: 1200
      , settings: {
        slidesToShow: 4
        , dots: cardCount >= 5 ? true : false
      }
    }
    , {
      breakpoint: 991
      , settings: {
        slidesToShow: 3
        , dots: cardCount >= 5 ? true : false
      }
    }
    , {
      breakpoint: 768
      , settings: {
        slidesToShow: 2
        , dots: true
      , }
    }
    , {
      breakpoint: 600
      , settings: {
        slidesToShow: 1
        , dots: true
      , }
    }
  ]
});
$('.block-our-specialists, .block-questions-specialists, .other-article').slick({
  // слайдер НАШИ СПЕЦИАЛИСТЫ и ВОПРОСЫ СПЕЦИАЛИСТАМ
  slidesToShow: 4
  , slidesToScroll: 1
  , dots: false
  , arrows: false
  , focusOnSelect: true
  , infinite: true
  , speed: 300
  , autoplay: true
  , autoplaySpeed: 2000
  , adaptiveHeight: true
  , responsive: [
    {
      breakpoint: 1200
      , settings: {
        slidesToShow: 4
      , }
    }
    , {
      breakpoint: 991
      , settings: {
        slidesToShow: 3
        , dots: true
      , }
    }
    , {
      breakpoint: 768
      , settings: {
        slidesToShow: 2
        , dots: true
      , }
    }
    , {
      breakpoint: 600
      , settings: {
        slidesToShow: 1
        , dots: true
      , }
    }
  ]
});
$('.block-our-advantages').slick({
  //слайдер НАШИ ПРЕИМУЩЕСТВА
  slidesToShow: 4
  , slidesToScroll: 1
  , dots: true
  , arrows: false
  , focusOnSelect: true
  , infinite: true
  , speed: 300
  , autoplay: true
  , autoplaySpeed: 2000
  , adaptiveHeight: true
  , responsive: [
    {
      breakpoint: 1200
      , settings: {
        slidesToShow: 4
      , }
    }
    , {
      breakpoint: 991
      , settings: {
        slidesToShow: 3
        , dots: true
      , }
    }
    , {
      breakpoint: 768
      , settings: {
        slidesToShow: 2
        , dots: true
      , }
    }
    , {
      breakpoint: 600
      , settings: {
        slidesToShow: 1
        , dots: true
      , }
    }
  ]
});
$('.block-stocks').slick({
  // слайдер АКЦИИ НАШЕЙ КЛИНИКИ
  slidesToShow: 3
  , slidesToScroll: 1
  , dots: true
  , arrows: false
  , focusOnSelect: true
  , infinite: true
  , speed: 300
  , autoplay: true
  , autoplaySpeed: 2000
  , responsive: [

    {
      breakpoint: 1600
      , settings: {
        slidesToShow: 2
      , }
    }
    , {
      breakpoint: 1024
      , settings: {
        slidesToShow: 1
      , }
    }
  ]
});
// МАСКА ДЛЯ ТЕЛЕФОНА
window.addEventListener("DOMContentLoaded", function () {
    [].forEach.call(document.querySelectorAll('.tel'), function (input) {
    var keyCode;

    function mask(event) {
      event.keyCode && (keyCode = event.keyCode);
      var pos = this.selectionStart;
      if (pos < 3) event.preventDefault();
      var matrix = "+7 (___) ___ ____"
        , i = 0
        , def = matrix.replace(/\D/g, "")
        , val = this.value.replace(/\D/g, "")
        , new_value = matrix.replace(/[_\d]/g, function (a) {
          return i < val.length ? val.charAt(i++) || def.charAt(i) : a
        });
      i = new_value.indexOf("_");
      if (i != -1) {
        i < 5 && (i = 3);
        new_value = new_value.slice(0, i)
      }
      var reg = matrix.substr(0, this.value.length).replace(/_+/g, function (a) {
        return "\\d{1," + a.length + "}"
      }).replace(/[+()]/g, "\\$&");
      reg = new RegExp("^" + reg + "$");
      if (!reg.test(this.value) || this.value.length < 5 || keyCode > 47 && keyCode < 58) this.value = new_value;
      if (event.type == "blur" && this.value.length < 5) this.value = ""
    }
    input.addEventListener("input", mask, false);
    input.addEventListener("focus", mask, false);
    input.addEventListener("blur", mask, false);
    input.addEventListener("keydown", mask, false)
  });
}); // МАСКА ДЛЯ ТЕЛЕФОНА
$('#navFooter').on('show.bs.collapse', function () {
  $('html, body').animate({
    scrollTop: document.querySelector("body > footer").offsetTop + 400
  }, 500);
})