<?php

$id = $_POST['id'];

$queryForDict = mysqli_query($_PLP['mysql'], 'SELECT * FROM navbar_navs ORDER BY `index` ASC') or die(mysqli_error($_PLP['mysql']));
$result = [];

while ($record = mysqli_fetch_assoc($queryForDict)) {
  $result[] = $record;
}

for ($i = 0; $i < count($result); $i++) {
  if ($result[$i]['id'] == $id) {
    $next = $result[$i - 1];
    $me = $result[$i];
  }
}

$firstUpdate = mysqli_query($_PLP['mysql'], 'UPDATE navbar_navs SET `index` = '. $next['index'] .' WHERE id = '. $me['id']) or die(mysqli_error($_PLP['mysql']));
$secondUpdate = mysqli_query($_PLP['mysql'], 'UPDATE navbar_navs SET `index` = '. $me['index'] .' WHERE id = '. $next['id']) or die(mysqli_error($_PLP['mysql']));

if (! ($firstUpdate && $secondUpdate)) {
  $_SESSION['alert'] = [
    'message' => 'Terjadi kesalahan saat memperbarui data. Silahkan coba lagi.',
    'type' => 'danger'
  ];
}

redirect('admin/navbar');