<?php

$id = escape($_PLP['mysql'], $_POST['id']);
$name = escape($_PLP['mysql'], $_POST['name']);
$link = 'https://' . escape($_PLP['mysql'], $_POST['link']);

$queryForEdit = mysqli_query($_PLP['mysql'], 'UPDATE navbar_navs SET name = "'. $name .'", link = "'. $link .'" WHERE id = '. $id) or die(mysqli_error($_PLP['mysql']));

if ($queryForEdit) {

  $_SESSION['alert'] = [
    'message' => 'Link berhasil diubah!',
    'type' => 'success'
  ];

} else {
  $_SESSION['alert'] = [
    'message' => 'Terjadi kesalahan saat memperbarui data. Silahkan coba lagi.',
    'type' => 'danger'
  ];
}

redirect('admin/navbar');
