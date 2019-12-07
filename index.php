<?php
require ('data.php');

$title = 'Adventskalender 2019';

$now = time();
$today = date("j");
$listitems = [];
for ($k = 1; $k < sizeof($data); $k++) :
  $allowed = mktime(0,0,0,12,$k,2019);
  if ($now > $allowed && $k <= $today) :
    $listitems[] = '
      <a href="'.$data[$k]['href'].'">
        <h2>'.$data[$k]['heading'].'</h2>
        <p>'.$data[$k]['author'].'</p>
        <p>'.$data[$k]['teaser'].'</p>
      </a>';
  elseif ($k == $today + 1) :
    $listitems[] = '<a href="'.$donate['href'].'">'.$donate['text'].'</a>';
  else :
    $listitems[] = '<p>'.str_replace('$$date$$',$k,$default).'</p>';
  endif;
endfor;

$allowed = mktime(0,0,0,12,24,2019);
if ($now < $allowed) :
  $listitems[] = '<a href="'.$donate['href'].'">'.$donate['text'].'</a>';
else :
  $listitems[] = '
    <a href="'.$data[24]['href'].'">
      <h2>'.$data[24]['heading'].'</h2>
      <p>'.$data[24]['author'].'</p>
      <p>'.$data[24]['teaser'].'</p>
    </a>';
endif; ?>

<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title?></title>
    <style><?php include('css.php') ?></style>
  </head>
  <body>
    <h1><?=$title?></h1>
    <ol> <?php 
      for ($k = 0; $k < sizeof($listitems); $k++) : ?>
        <li><?=$listitems[$k]?></li> <?php
      endfor; ?>
    </ol>
  </body>
</html>