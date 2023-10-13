(function (w, d, s, l, i) {
  w[l] = w[l] || [];
  w[l].push({
    'gtm.start': new Date().getTime(),
    event: 'gtm.js',
  });
  var f = d.getElementsByTagName(s)[0],
    j = d.createElement(s),
    dl = l != 'dataLayer' ? '&l=' + l : '';
  j.async = true;
  j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
  f.parentNode.insertBefore(j, f);
})(window, document, 'script', 'dataLayer', 'GTM-WDS96LQ');

(function (d, w, c) {
  (w[c] = w[c] || []).push(function () {
    try {
      w.yaCounter47668138 = new Ya.Metrika({
        id: 47668138,
        clickmap: true,
        trackLinks: true,
        accurateTrackBounce: true,
        webvisor: true,
      });
    } catch (e) {}
  });
  var n = d.getElementsByTagName('script')[0],
    s = d.createElement('script'),
    f = function () {
      n.parentNode.insertBefore(s, n);
    };
  s.type = 'text/javascript';
  s.async = true;
  if (w.opera == '[object Opera]') {
    d.addEventListener('DOMContentLoaded', f, false);
  } else {
    f();
  }
})(document, window, 'yandex_metrika_callbacks');
