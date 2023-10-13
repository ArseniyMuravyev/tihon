<footer id="footer">
  <div class="inner">
    <p class="copyright">&copy; 2023 Tihon.club</p>
  </div>
</footer>

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.dropotron.min.js"></script>
<script src="assets/js/jquery.scrollex.min.js"></script>
<script src="assets/js/skel.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" />
<script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>

<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
<script type="text/javascript">
  ymaps.ready(init);
  var map, place;

  function init() {
    map = new ymaps.Map("map", {
      //                    center: [54.19856696, 45.17901574],
      center: [54.204786, 45.17654],
      zoom: 15,
      controls: ['zoomControl', 'typeSelector']
    });

    // noinspection JSUnresolvedVariable
    map.behaviors.disable('scrollZoom');

    // noinspection JSUnresolvedVariable, JSUnresolvedFunction
    place = new ymaps.Placemark(
      //                    [54.20032853, 45.17895181],
      [54.20478686, 45.17654874], {
      balloonContent: 'ул. Строительная, 1ж'
    }, {
      iconLayout: 'default#image',
      iconImageHref: 'images/logo.jpg',
      iconImageSize: [45, 38],
      iconImageOffset: [-25, -40]
    }
    );

    // noinspection JSUnresolvedVariable
    map.geoObjects.add(place);
  }

  $(document).ready(function () {
    // noinspection JSUnresolvedFunction
    var slideWidth = 600,
      minSlides = Math.ceil($(window).width() / slideWidth);
    $('.slider')
      .bxSlider({
        responsive: true,
        controls: minSlides > 1,
        minSlides: minSlides,
        maxSlides: 6,
        moveSlides: 1,
        touchEnabled: minSlides === 1,
        slideWidth: slideWidth,
        slideMargin: 0,
        mode: 'horizontal',
      })
      .magnificPopup({
        delegate: 'a',
        type: 'image',
        tLoading: 'Загрузка...',
        mainClass: 'mfp-img-mobile',
        gallery: {
          enabled: true,
          tCounter: '', //'Изображение %curr% из %total%',
          navigateByImgClick: true,
          preload: [0, 1]
        },
        image: {
          tError: '<a href="%url%">Файл</a> не удалось загрузить.',
          titleSrc: function (item) {
            return item.el.attr('title');
          }
        }
      });
    $('form').on('submit', function (e) {
      e.preventDefault();
      var $form = $(this);
      $.post($form.attr('action'), $form.serialize(), function (resp) {
        if (resp) {
          alert('Сообщение отправлено');
        }
      });
    })
  });
</script>