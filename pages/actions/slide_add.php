<?php

$image = is_uploaded_file($_FILES['image']['tmp_name']) ? 'public/images/slides/'.$_FILES['image']['name'] : false;

if (! $image) {
  $_SESSION['alert'] = [
    'message' => 'Terjadi kesalahan: Gambar tidak berhasil diunggah. Silahkan coba lagi.',
    'type' => 'danger'
  ];
  redirect('admin/slideshow');
}

$queryForIndex = mysqli_query($_PLP['mysql'], 'SELECT `index` FROM slides ORDER BY `index` DESC LIMIT 0,1') or die(mysqli_error($_PLP['mysql']));
$recordForIndex = mysqli_fetch_assoc($queryForIndex);
$index = $recordForIndex['index'] + 1;

$queryForInsert = mysqli_query($_PLP['mysql'], 'INSERT INTO slides (image, `index`) VALUES ("'. $image .'", "'. $index .'")') or die(mysqli_error($_PLP['mysql']));

if ($queryForInsert) {
  move_uploaded_file($_FILES['image']['tmp_name'], $image);
  
  $_SESSION['alert'] = [
    'message' => 'Slide berhasil ditambahkan!',
    'type' => 'success'
  ];

} else {
  $_SESSION['alert'] = [
    'message' => 'Terjadi kesalahan saat penyisipan data ke basis data. Silahkan coba lagi.',
    'type' => 'danger'
  ];
}

redirect('admin/slideshow');