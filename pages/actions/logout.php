<?php

unset($_SESSION['admin']);

$_SESSION['alert'] = [
  'message' => 'Anda telah Log Out.',
  'type' => 'info'
];

redirect('admin/login');