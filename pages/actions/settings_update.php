<?php

// $logo = is_uploaded_file($_FILES['logo']['tmp_name']) ? 'public/images/logo.svg' : false;
$courses_shown = escape($_PLP['mysql'], $_POST['courses_shown']);
$token_to_lms = escape($_PLP['mysql'], $_POST['token_to_lms']);
$link_to_lms = escape($_PLP['mysql'], $_POST['link_to_lms']);
$link_to_main = escape($_PLP['mysql'], $_POST['link_to_main']);
$link_to_library = escape($_PLP['mysql'], $_POST['link_to_library']);
$link_to_contact = escape($_PLP['mysql'], $_POST['link_to_contact']);
$contact_number = escape($_PLP['mysql'], $_POST['contact_number']);

$query = mysqli_query($_PLP['mysql'], 'UPDATE settings SET courses_shown = "'. $courses_shown .'", token_to_lms = "'. $token_to_lms .'", link_to_lms = "'. $link_to_lms .'", link_to_main = "'. $link_to_main .'", link_to_library = "'. $link_to_library .'", link_to_contact = "'. $link_to_contact .'", contact_number = "'. $contact_number .'"') or die(mysqli_error($_PLP['mysql']));

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

redirect('admin/config');