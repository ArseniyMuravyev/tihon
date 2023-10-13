<?php
if ($_SERVER['SERVER_NAME'] == 'tihon.club') {
  header('Location: https://tihonclub.ru');
  exit;
}
?><!DOCTYPE html>

<html lang="ru">

<head>

  <!-- Google Tag Manager -->
  <script>
    (function (w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-WDS96LQ');
  </script>
  <!-- End Google Tag Manager -->

  <title>Бильярдный клуб Тихон</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/main.css" />
  <link rel="stylesheet" href="assets/css/custom.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&display=swap" rel="stylesheet">
  <noscript>
    <link rel="stylesheet" href="assets/css/noscript.css" />
  </noscript>
</head>

<body>

  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WDS96LQ" height="0" width="0"
      style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <!-- Yandex.Metrika counter -->
  <script type="text/javascript">
    (function (d, w, c) {
      (w[c] = w[c] || []).push(function () {
        try {
          w.yaCounter47668138 = new Ya.Metrika({
            id: 47668138,
            clickmap: true,
            trackLinks: true,
            accurateTrackBounce: true,
            webvisor: true
          });
        } catch (e) { }
      });
      var n = d.getElementsByTagName("script")[0],
        s = d.createElement("script"),
        f = function () {
          n.parentNode.insertBefore(s, n);
        };
      s.type = "text/javascript";
      s.async = true;
      s.src = "https://mc.yandex.ru/metrika/watch.js";
      if (w.opera == "[object Opera]") {
        d.addEventListener("DOMContentLoaded", f, false);
      } else {
        f();
      }
    })(document, window, "yandex_metrika_callbacks");
  </script> <noscript>
    <div><img src="https://mc.yandex.ru/watch/47668138" style="position:absolute; left:-9999px;" alt="" /></div>
  </noscript> <!-- /Yandex.Metrika counter -->
  <header id="header" class="alt">
    <h1 class="header__title">
      <a href="/"><span>Бильярдный клуб</span> Тихон</a>
    </h1>
    <div class="header-phone">
      <a href="tel:+7 (927) 276-03-19" class="fa fa-phone" title="Повзонить">&nbsp; +7 (927) 276-03-19</a>
    </div>
    <nav class="menu" id="nav">
      <ul>
        <li><a href="index.php">Главная</a></li>
        <li><a href="menu.php">Меню</a></li>
        <li><a href="study.php">Обучение</a></li>
        <li><a href="service.php">Услуги</a></li>
        <li><a href="tourn.php">Турниры</a></li>
      </ul>
    </nav>
  </header>

  <section id="banner">
    <article>
      <img src="images/slide01.jpg" alt="" />
      <div class="inner full-height align-left">
        <div>
          <img src="images/logo.png" />
        </div>
        <h2 title="Посмотреть на карте"><span class="fa fa-map-marker"></span>&nbsp;<a
            href="https://yandex.ru/maps/42/saransk/?azimuth=0.059313923798244766&from=api-maps&ll=45.177381%2C54.204465&mode=routes&origin=jsapi_2_1_79&rtext=~54.204787%2C45.176549&rtt=auto&ruri=~&z=17.6"
            class="smooth" target="_blank">г. Саранск, <span class="nowrap">ул. Строительная, 1ж</span></a></h2>
        <h2 title="Повзонить"><a href="tel:+7 (927) 276-03-19" class="smooth"><span class="fa fa-phone"></span>&nbsp;+7
            (927) 276-03-19</a></h2>
      </div>
    </article>
  </section>