<?php

$urname = escape($_PLP['mysql'], $_POST['urname']);
$passkey = md5(escape($_PLP['mysql'], $_POST['passkey']));

$query = mysqli_query($_PLP['mysql'], 'SELECT * FROM users WHERE urname = "'. $urname .'" AND passkey = "'. $passkey .'"') or die(mysqli_error($_PLP['mysql']));

if (! mysqli_num_rows($query)) {
  $_SESSION['alert'] = [
    'message' => 'Username dan password tidak sesuai. Silahkan periksa kembali.',
    'type' => 'danger'
  ];

  redirect('admin/login');
}

$_SESSION['admin'] = $urname;
redirect('admin/dashboard');