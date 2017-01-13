<?php

$id = $_POST['id'];

$queryForIndex = mysqli_query($_PLP['mysql'], 'SELECT `index` FROM navbar_navs WHERE id != '. $id .' ORDER BY `index` ASC LIMIT 0,1') or die(mysqli_error($_PLP['mysql']));
$recordForIndex = mysqli_fetch_assoc($queryForIndex);
$index = $recordForIndex['index'] - 1;

$queryForUpdate = mysqli_query($_PLP['mysql'], 'UPDATE navbar_navs SET `index` = '. $index .' WHERE id = '. $id) or die(mysqli_error($_PLP['mysql']));

if (! $queryForUpdate) {
  $_SESSION['alert'] = [
    'message' => 'Terjadi kesalahan saat memperbarui data. Silahkan coba lagi.',
    'type' => 'danger'
  ];
}

redirect('admin/navbar');