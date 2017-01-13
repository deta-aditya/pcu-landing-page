<?php

$id = $_POST['id'];

$queryForLink = mysqli_query($_PLP['mysql'], 'SELECT image FROM slides WHERE id = '. $id) or die(mysqli_error($_PLP['mysql']));
$resultForLink = mysqli_fetch_assoc($queryForLink);
$image = $resultForLink['image'];

$query = mysqli_query($_PLP['mysql'], 'DELETE FROM slides WHERE id = '. $id) or die(mysqli_error($_PLP['mysql']));

if ($query) {
  $_SESSION['alert'] = [
    'message' => 'Slide telah berhasil dihapus.',
    'type' => 'info'
  ];
  unlink($image);
} else {
  $_SESSION['alert'] = [
    'message' => 'Terjadi kesalahan saat menghapus data. Silahkan coba lagi.',
    'type' => 'danger'
  ];
}

redirect('admin/slideshow');