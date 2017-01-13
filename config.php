<?php

// Set MySQL connection to db_plp
$_PLP['mysql'] = mysqli_connect('localhost', 'root', '', 'db_plp');
$_PLP['timezone'] = 'Asia/Jakarta';

// Set timezone to Asia/Jakarta
date_default_timezone_set($_PLP['timezone']);

// Start Session
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}
