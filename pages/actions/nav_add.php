<?php

$name = escape($_PLP['mysql'], $_POST['name']);
$link = 'https://' . escape($_PLP['mysql'], $_POST['link']);
$put_on = escape($_PLP['mysql'], $_POST['put_on']);

$queryForToppestIndex = mysqli_query($_PLP['mysql'], 'SELECT `index` FROM navbar_navs ORDER BY `index` DESC LIMIT 0,1') or die(mysqli_error($_PLP['mysql']));
$recordForToppestIndex = mysqli_fetch_assoc($queryForToppestIndex);

$queryForDownestIndex = mysqli_query($_PLP['mysql'], 'SELECT `index` FROM navbar_navs ORDER BY `index` ASC LIMIT 0,1') or die(mysqli_error($_PLP['mysql']));
$recordForDownestIndex = mysqli_fetch_assoc($queryForDownestIndex);

$index = $put_on === 'toppest' ? $recordForToppestIndex['index'] + 1 : $recordForDownestIndex['index'] - 1;

$queryForInsert = mysqli_query($_PLP['mysql'], 'INSERT INTO navbar_navs (name, link, `index`) VALUES ("'. $name .'", "'. $link .'", "'. $index .'")') or die(mysqli_error($_PLP['mysql']));

if ($queryForInsert) {

  $_SESSION['alert'] = [
    'message' => 'Link berhasil ditambahkan!',
    'type' => 'success'
  ];

} else {
  $_SESSION['alert'] = [
    'message' => 'Terjadi kesalahan saat penyisipan data ke basis data. Silahkan coba lagi.',
    'type' => 'danger'
  ];
}

redirect('admin/navbar');
