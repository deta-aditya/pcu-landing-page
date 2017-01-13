<?php

$about = is_uploaded_file($_FILES['about_parallax_image']['tmp_name']) ? 'public/images/parallaxes/'.$_FILES['about_parallax_image']['name'] : false;
$contact = is_uploaded_file($_FILES['contact_parallax_image']['tmp_name']) ? 'public/images/parallaxes/'.$_FILES['contact_parallax_image']['name'] : false;

if (! ($about || $contact)) {
  $_SESSION['alert'] = [
    'message' => 'Tidak ada data yang diubah.',
    'type' => 'info'
  ];
  redirect('admin/parallax');
}

$queryOld = mysqli_query($_PLP['mysql'], 'SELECT about_parallax_image, contact_parallax_image FROM settings') or die(mysqli_error($_PLP['mysql']));
$resultOld = mysqli_fetch_assoc($queryOld);

$query = [];
$oldImages = [];

if ($about) {
  $query['about'] = 'about_parallax_image = "'. $about .'"';
  $oldImages[] = $resultOld['about_parallax_image'];
}

if ($contact) {
  $query['contact'] = 'contact_parallax_image = "'. $contact .'"';
  $oldImages[] = $resultOld['contact_parallax_image'];
}

$queryExe = mysqli_query($_PLP['mysql'], 'UPDATE settings SET ' . implode(', ', $query)) or die(mysqli_error($_PLP['mysql']));

if ($queryExe) {

  foreach ($query as $name => $value) {
    move_uploaded_file($_FILES[$name . '_parallax_image']['tmp_name'], ${$name});
  }

  foreach ($oldImages as $oi) {
    unlink($oi);
  }

  $_SESSION['alert'] = [
    'message' => 'Perubahan telah berhasil disimpan.',
    'type' => 'success'
  ];

} else {
  $_SESSION['alert'] = [
    'message' => 'Terjadi kesalahan saat memperbarui data. Silahkan coba lagi.',
    'type' => 'danger'
  ];
}

redirect('admin/parallax');  
