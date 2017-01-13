<?php

$content = escape($_PLP['mysql'], $_POST['content']);

$query = mysqli_query($_PLP['mysql'], 'UPDATE about_texts SET content = "'. $content .'"') or die(mysqli_error($_PLP['mysql']));

if ($query) {
  $_SESSION['alert'] = [
    'message' => 'Perubahan telah berhasil disimpan!',
    'type' => 'success'
  ];
} else {
  $_SESSION['alert'] = [
    'message' => 'Terjadi kesalahan saat penyisipan data ke basis data. Silahkan coba lagi.',
    'type' => 'danger'
  ];
}

redirect('admin/about');