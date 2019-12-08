<?php
require ('data.php');

$year = 2019;
$title = 'Adventskalender '.$year;

$now = time();
$today = date("j");
$listitems = [];
for ($k = 1; $k <= sizeof($data); $k++) :
  $allowed = mktime(0,0,0,12,$k,$year);
  if ($now > $allowed) :
    $listitems[] = '
      <a href="'.$data[$k]['href'].'">
        <h2>'.$data[$k]['heading'].'</h2>
        <p>'.$data[$k]['author'].'</p>
        <p>'.$data[$k]['teaser'].'</p>
      </a>';
  elseif ($k == $today + 1 || $k == 24) :
    $listitems[] = '<a class="donate" href="'.$donate['href'].'">'.$donate['text'].'</a>';
  else :
    $listitems[] = '<a class="comming_soon">'.str_replace('$$date$$',$k,$default).'</a>';
  endif;
endfor; ?>

<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title?></title>
    <style><?php include('css.php') ?></style>
    <script><?php include('js.php') ?></script>
  </head>
  <body>
    <h1><a href="http://selfhtml.org"><?=$title?></a></h1>
    <ol> <?php 
      for ($k = 0; $k < sizeof($listitems); $k++) : ?>
        <li><?=$listitems[$k]?></li> <?php
      endfor; ?>
    </ol>
  </body>
</html>