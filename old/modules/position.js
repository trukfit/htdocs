ymaps.ready(function () {
    var myMap = new ymaps.Map('map', {
            center: [56.3489046, 41.3167681],
            zoom: 12
        }, {
            searchControlProvider: 'yandex#search'
        }),
        myPlacemark = new ymaps.Placemark(myMap.getCenter(), {
            hintContent: 'Собственный значок',
            balloonContent: 'Красивая метка'
        }, {
            //  Опции.
            // Необходимо указать данный тип макета.
            iconLayout: 'default#image',
            // Своё изображение иконки метки.
            iconImageHref: 'w.png',
            // Размеры метки.
            iconImageSize: [50, 42],
            // Смещение левого верхнего угла иконки относительно
            // её "ножки" (точки привязки).
            iconImageOffset: [5, -42]
        });

    myMap.geoObjects.add(myPlacemark);
});
