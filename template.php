<?php


function ulf_mitvadehav_preprocess_html(&$variables) {
  drupal_add_js(
    '/*<![CDATA[*/
(function() {
var sz = document.createElement(\'script\'); sz.type = \'text/javascript\'; sz.async = true;
sz.src = \'//siteimproveanalytics.com/js/siteanalyze_133886.js\';
var s = document.getElementsByTagName(\'script\')[0]; s.parentNode.insertBefore(sz, s);
})();
/*]]>*/',
    [
      'type' => 'inline',
      'scope' => 'footer',
    ]
  );
}
