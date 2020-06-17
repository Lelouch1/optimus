ymaps.ready(function () {
  var myMap = new ymaps.Map('map', {
      center: [64.5455039, 40.5318939]
      , zoom: 17
    }, {
      searchControlProvider: 'yandex#search'
    }), // Создаём макет содержимого.
    MyIconContentLayout = ymaps.templateLayoutFactory.createClass('<div style="color: #FFFFFF; font-weight: bold;">$[properties.iconContent]</div>')
    , myPlacemark = new ymaps.Placemark(myMap.getCenter(), {
      balloonContent: '<b>Optimus medicus</b><br>Каждый достоин лучшего<br>163000, г. Архангельск, ул. Попова, д. 34'
    }, {
      // Опции.
      // Необходимо указать данный тип макета.
      iconLayout: 'default#image', // Своё изображение иконки метки.
      iconImageHref: 'img/logoForMap.svg', // Размеры метки.
      iconImageSize: [40, 40], // Смещение левого верхнего угла иконки относительно
      // её "ножки" (точки привязки).
      iconImageOffset: [-5, -38]
    })
  myMap.geoObjects.add(myPlacemark);
  //  myMap.behaviors.disable('scrollZoom');
});