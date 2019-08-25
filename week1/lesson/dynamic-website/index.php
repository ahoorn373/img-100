<?php

require('templates/nav.php');

$possible_titles = [
  'Welcome to IMG 100',
  'Wecome to PHP',
  'Wecome to NIC'
];

$title = $possible_titles[rand(0, count($possible_titles) - 1)];

?>
<h1>
  <?= $title ?>
</h1>