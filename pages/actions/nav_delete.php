<?php

$id = $_POST['id'];

$query = mysqli_query($_PLP['mysql'], 'DELETE FROM navbar_navs WHERE id = '. $id) or die(mysqli_error($_PLP['mysql']));

if ($query) {
  $_SESSION['alert'] = [
    'message' => 'Link telah berhasil dihapus.',
    'type' => 'info'
  ];
  unlink($image);
} else {
  $_SESSION['alert'] = [
    'message' => 'Terjadi kesalahan saat menghapus data. Silahkan coba lagi.',
    'type' => 'danger'
  ];
}

redirect('admin/navbar');
