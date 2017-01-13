<?php

$id = $_POST['id'];

$queryForDict = mysqli_query($_PLP['mysql'], 'SELECT * FROM slides ORDER BY `index` DESC') or die(mysqli_error($_PLP['mysql']));
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

$firstUpdate = mysqli_query($_PLP['mysql'], 'UPDATE slides SET `index` = '. $next['index'] .' WHERE id = '. $me['id']) or die(mysqli_error($_PLP['mysql']));
$secondUpdate = mysqli_query($_PLP['mysql'], 'UPDATE slides SET `index` = '. $me['index'] .' WHERE id = '. $next['id']) or die(mysqli_error($_PLP['mysql']));

if (! ($firstUpdate && $secondUpdate)) {
  $_SESSION['alert'] = [
    'message' => 'Terjadi kesalahan saat memperbarui data. Silahkan coba lagi.',
    'type' => 'danger'
  ];
}

redirect('admin/slideshow');